<?php

namespace Alura\Arquitetura\Academico\Dominio\Aluno;

use Alura\Arquitetura\Shared\Dominio\Cpf;
use Alura\Arquitetura\Shared\Dominio\Evento\Evento;

class AlunoMatriculado implements Evento
{
    private string             $nome;
    private \DateTimeImmutable $momento;
    private Cpf                $cpfAluno;

    public function __construct(Cpf $cpfAluno)
    {
        $this->nome = 'aluno-matriculado';
        $this->momento  = new \DateTimeImmutable();
        $this->cpfAluno = $cpfAluno;
    }

    public function cpfAluno(): Cpf
    {
        return $this->cpfAluno;
    }

    public function nome(): string
    {
        return $this->nome;
    }

    public function momento(): \DateTimeImmutable
    {
        return $this->momento;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}