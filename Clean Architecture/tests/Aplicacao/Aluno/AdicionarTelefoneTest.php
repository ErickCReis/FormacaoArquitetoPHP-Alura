<?php

namespace Alura\Arquitetura\Testes\Aplicacao\Aluno;

use Alura\Arquitetura\Aplicacao\Aluno\AdicionarTelefone\AdicionarTelefone;
use Alura\Arquitetura\Aplicacao\Aluno\AdicionarTelefone\AdicionarTelefoneDto;
use Alura\Arquitetura\Dominio\Aluno\Aluno;
use Alura\Arquitetura\Dominio\Cpf;
use Alura\Arquitetura\Infra\Aluno\RepositorioAlunoEmMemoria;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Alura\Arquitetura\Aplicacao\Aluno\AdicionarTelefone\AdicionarTelefone
 */
class AdicionarTelefoneTest extends TestCase
{
    public function testTelefoneDeveSerAdicionadoALista()
    {
        $repositorioAluno = new RepositorioAlunoEmMemoria();
        $repositorioAluno->adicionar(
            Aluno::comCpfNomeEEmail(
                '123.456.789-10',
                'Teste',
                'email@example.com'
            )
        );

        $dadosNovoTelefone = new AdicionarTelefoneDto(
            '123.456.789-10',
            '12',
            '111111111'
        );

        $useCase = new AdicionarTelefone($repositorioAluno);

        $useCase->executa($dadosNovoTelefone);

        $aluno = $repositorioAluno->buscarPorCpf(new Cpf('123.456.789-10'));
        self::assertCount(1, $aluno->telefones());
        self::assertSame('12', $aluno->telefones()[0]->ddd());
        self::assertSame('111111111', $aluno->telefones()[0]->numero());
    }
}