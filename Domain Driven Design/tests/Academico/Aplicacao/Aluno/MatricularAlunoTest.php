<?php

namespace Alura\Arquitetura\Testes\Academico\Aplicacao\Aluno;

use Alura\Arquitetura\Academico\Aplicacao\Aluno\MatricularAluno\MatricularAluno;
use Alura\Arquitetura\Academico\Aplicacao\Aluno\MatricularAluno\MatricularAlunoDto;
use Alura\Arquitetura\Academico\Dominio\Cpf;
use Alura\Arquitetura\Academico\Dominio\PublicadorDeEvento;
use Alura\Arquitetura\Academico\Infra\Aluno\RepositorioAlunoEmMemoria;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Alura\Arquitetura\Academico\Aplicacao\Aluno\MatricularAluno\MatricularAluno
 */
class MatricularAlunoTest extends TestCase
{
    public function testAlunoDeveSerAdicionadoAoRepositorio()
    {
        $dadosMatricula   = new MatricularAlunoDto(
            '123.456.789-10',
            'Teste',
            'email@example.com'
        );
        $repositorioAluno = new RepositorioAlunoEmMemoria();
        $publicador       = new PublicadorDeEvento();
        $useCase          = new MatricularAluno($repositorioAluno, $publicador);

        $useCase->executa($dadosMatricula);

        $aluno = $repositorioAluno->buscarPorCpf(new Cpf('123.456.789-10'));
        self::assertSame('Teste', $aluno->nome());
        self::assertSame('email@example.com', $aluno->email());
        self::assertEmpty($aluno->telefones());
    }
}