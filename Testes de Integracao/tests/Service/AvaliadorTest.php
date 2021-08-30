<?php

namespace Alura\Leilao\Tests\Unit\Service;

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Service\Avaliador;
use PHPUnit\Framework\TestCase;

class AvaliadorTest extends TestCase
{
    private Avaliador $avaliador;

    protected function setUp(): void
    {
        $this->avaliador = new Avaliador();
    }

    /**
     * @dataProvider entregaLeiloes
     */
    public function testAvaliadorDeveAcharMaiorValor(Leilao $leilao)
    {
        $this->avaliador->avalia($leilao);

        static::assertEquals(2000, $this->avaliador->getMaiorValor());
    }

    /**
     * @dataProvider entregaLeiloes
     */
    public function testAvaliadorDeveAcharMenorValor(Leilao $leilao)
    {
        $this->avaliador->avalia($leilao);

        static::assertEquals(1000, $this->avaliador->getMenorValor());
    }

    /**
     * @dataProvider entregaLeiloes
     */
    public function testAvaliadorDeveOrdenarOs3Lances(Leilao $leilao)
    {
        $this->avaliador->avalia($leilao);

        $lances = $this->avaliador->getTresMaioresLances();

        static::assertCount(3, $lances);
        static::assertEquals(2000, $lances[0]->getValor());
        static::assertEquals(1500, $lances[1]->getValor());
        static::assertEquals(1000, $lances[2]->getValor());
    }

    public function testAvaliadorDeveRetornarOsMaioresLancesDisponiveis()
    {
        $leilao = new Leilao('Fiat 147 0KM');

        $leilao->recebeLance(new Lance(new Usuario('João'), 1000));
        $leilao->recebeLance(new Lance(new Usuario('Maria'), 1500));

        $this->avaliador->avalia($leilao);

        static::assertCount(2, $this->avaliador->getTresMaioresLances());
    }

    public function leilaoComLancesEmOrdemCrescente()
    {
        $leilao = new Leilao('Fiat 147 0KM');
        $joao   = new Usuario('João');
        $maria  = new Usuario('Maria');
        $ana    = new Usuario('Ana');

        $leilao->recebeLance(new Lance($joao, 1000));
        $leilao->recebeLance(new Lance($maria, 1500));
        $leilao->recebeLance(new Lance($ana, 2000));

        return [
            'ordem-crescente' => [$leilao]
        ];
    }

    public function leilaoComLancesEmOrdemDecrescente()
    {
        $leilao = new Leilao('Fiat 147 0KM');
        $joao   = new Usuario('João');
        $maria  = new Usuario('Maria');
        $ana    = new Usuario('Ana');

        $leilao->recebeLance(new Lance($ana, 2000));
        $leilao->recebeLance(new Lance($maria, 1500));
        $leilao->recebeLance(new Lance($joao, 1000));

        return [
            'ordem-decrescente' => [$leilao]
        ];
    }

    public function leilaoComLancesEmOrdemAleatoria()
    {
        $leilao = new Leilao('Fiat 147 0KM');
        $joao   = new Usuario('João');
        $maria  = new Usuario('Maria');
        $ana    = new Usuario('Ana');

        $leilao->recebeLance(new Lance($maria, 1500));
        $leilao->recebeLance(new Lance($ana, 2000));
        $leilao->recebeLance(new Lance($joao, 1000));

        return [
            'ordem-aleatoria' => [$leilao]
        ];
    }

    public function entregaLeiloes(): array
    {
        return array_merge(
            $this->leilaoComLancesEmOrdemCrescente(),
            $this->leilaoComLancesEmOrdemDecrescente(),
            $this->leilaoComLancesEmOrdemAleatoria()
        );
    }
}
