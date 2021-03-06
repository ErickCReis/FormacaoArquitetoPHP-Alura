<?php

namespace Alura\Arquitetura\Testes\Academico\Dominio\Aluno;

use Alura\Arquitetura\Academico\Dominio\Aluno\Aluno;
use Alura\Arquitetura\Academico\Dominio\Aluno\AlunoJaTem2Telefones;
use Alura\Arquitetura\Shared\Dominio\Cpf;
use Alura\Arquitetura\Academico\Dominio\Email;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Alura\Arquitetura\Academico\Dominio\Aluno\Aluno
 */
class AlunoTest extends TestCase
{
    private Aluno $aluno;

    protected function setUp(): void
    {
        $this->aluno = new Aluno(
            $this->createStub(Cpf::class),
            '',
            $this->createStub(Email::class)
        );
    }

    public function testAdicionarMaisDe2TelefonesDeveLancarExcecao()
    {
        self::expectException(AlunoJaTem2Telefones::class);

        $this->aluno->adicionarTelefone(12, 111111111);
        $this->aluno->adicionarTelefone(12, 222222222);
        $this->aluno->adicionarTelefone(12, 333333333);
    }

    public function testAdicionar1TelefoneDeveFuncionar()
    {
        $this->aluno->adicionarTelefone(12, 111111111);

        self::assertCount(1, $this->aluno->telefones());
    }

    public function testAdicionar2TelefonesDeveFuncionar()
    {
        $this->aluno->adicionarTelefone(12, 111111111);
        $this->aluno->adicionarTelefone(12, 222222222);

        self::assertCount(2, $this->aluno->telefones());
    }
}