<?php

namespace Alura\Arquitetura\Gamificacao\Infra\Selo;

use Alura\Arquitetura\Shared\Dominio\Cpf;
use Alura\Arquitetura\Gamificacao\Dominio\Selo\RepositorioSelo;
use Alura\Arquitetura\Gamificacao\Dominio\Selo\Selo;

class RepositorioSeloEmMemoria implements RepositorioSelo
{
    /** @var Selo[] */
    private array $selos = [];

    public function adiciona(Selo $selo): void
    {
        $this->selos[] = $selo;
    }

    /**
     * @return Selo[]
     */
    public function selosDeAlunosComCpf(Cpf $cpf): array
    {
        return array_filter($this->selos, fn (Selo $selo) => $selo->cpfAluno() == $cpf);
    }
}