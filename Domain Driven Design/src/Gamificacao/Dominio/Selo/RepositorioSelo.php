<?php

namespace Alura\Arquitetura\Gamificacao\Dominio\Selo;

use Alura\Arquitetura\Shared\Dominio\Cpf;

interface RepositorioSelo
{
    public function adiciona(Selo $selo): void;

    /**
     * @return Selo[]
     */
    public function selosDeAlunosComCpf(Cpf $cpf): array;

}