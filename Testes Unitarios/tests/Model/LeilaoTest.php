<?php

namespace Alura\Leilao\Tests\Model;

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use PHPUnit\Framework\TestCase;

class LeilaoTest extends TestCase
{
    /**
     * @dataProvider geraLances
     */
    public function testLeilaoDeveReceberLances(
        int $qtdLances,
        Leilao $leilao,
        array $valores
    ) {
        self::assertCount($qtdLances, $leilao->getLances());

        foreach ($valores as $i => $valorEsperado) {
            self::assertEquals($valorEsperado, $leilao->getLances()[$i]->getValor());
        }
    }

    public function testLeilaoNaoDeveReceberLancesRepetidos()
    {
        self::expectException(\DomainException::class);
        self::expectExceptionMessage('Usuário não pode propor 2 lances consecutivos');

        $ana  = new Usuario('Ana');

        $leilao = new Leilao('Variante');
        $leilao->recebeLance(new Lance($ana, 1000));
        $leilao->recebeLance(new Lance($ana, 1500));
    }

    public function testLeilaoNaoDeveAceitarMaisDe5LancesProUsuario()
    {
        self::expectException(\DomainException::class);
        self::expectExceptionMessage('Usuário não pode propor mais de 5 lances por leilão');

        $maria = new Usuario('Maria');
        $joao  = new Usuario('João');

        $leilao = new Leilao('Brasília Amarela');
        $leilao->recebeLance(new Lance($joao, 1000));
        $leilao->recebeLance(new Lance($maria, 1500));
        $leilao->recebeLance(new Lance($joao, 2000));
        $leilao->recebeLance(new Lance($maria, 2500));
        $leilao->recebeLance(new Lance($joao, 3000));
        $leilao->recebeLance(new Lance($maria, 3500));
        $leilao->recebeLance(new Lance($joao, 4000));
        $leilao->recebeLance(new Lance($maria, 4500));
        $leilao->recebeLance(new Lance($joao, 5000));
        $leilao->recebeLance(new Lance($maria, 5500));

        $leilao->recebeLance(new Lance($joao, 6000));
    }

    /* ---------- DADOS ---------- */
    public function geraLances(): array
    {
        $maria = new Usuario('Maria');
        $joao  = new Usuario('João');

        $leilaoCom1Lance = new Leilao('Fusca 1972 0km');
        $leilaoCom1Lance->recebeLance(new Lance($maria, 5000));

        $leilaoCom2Lances = new Leilao('Fiat 147 0km');
        $leilaoCom2Lances->recebeLance(new Lance($joao, 1000));
        $leilaoCom2Lances->recebeLance(new Lance($maria, 2000));

        return [
            '1-lance' => [1, $leilaoCom1Lance, [5000]],
            '2-lances' => [2, $leilaoCom2Lances, [1000, 2000]],
        ];
    }

}