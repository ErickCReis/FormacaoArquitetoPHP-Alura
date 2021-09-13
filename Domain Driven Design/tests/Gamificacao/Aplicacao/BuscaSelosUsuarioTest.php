<?php

namespace Alura\Arquitetura\Testes\Gamificacao\Aplicacao;

use Alura\Arquitetura\Gamificacao\Aplicacao\BuscarSeloDeUsuario\BuscaSelosUsuario;
use Alura\Arquitetura\Gamificacao\Aplicacao\BuscarSeloDeUsuario\BuscaSelosUsuarioDto;
use Alura\Arquitetura\Gamificacao\Dominio\Selo\Selo;
use Alura\Arquitetura\Gamificacao\Infra\Selo\RepositorioSeloEmMemoria;
use Alura\Arquitetura\Shared\Dominio\Cpf;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Alura\Arquitetura\Gamificacao\Aplicacao\BuscarSeloDeUsuario\BuscaSelosUsuario
 */
class BuscaSelosUsuarioTest extends TestCase
{
    public function testDeveSerPossivelEncontrarSelosDeUmCpf()
    {
        $selo            = new Selo(new Cpf('123.456.789-10'), 'Novato');
        $repositorioSelo = new RepositorioSeloEmMemoria();
        $repositorioSelo->adiciona($selo);

        $dados   = new BuscaSelosUsuarioDto('123.456.789-10');
        $useCase = new BuscaSelosUsuario($repositorioSelo);

        $selos = $useCase->execute($dados);

        self::assertCount(1, $selos);
        self::assertSame('123.456.789-10', (string)$selos[0]->cpfAluno());
        self::assertSame('Novato', (string)$selos[0]);
    }

}