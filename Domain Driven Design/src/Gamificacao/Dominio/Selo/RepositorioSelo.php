<?php

namespace Alura\Arquitetura\Gamificacao\Dominio\Selo;

use Alura\Arquitetura\Academico\Dominio\Cpf;

interface RepositorioSelo
{
    public function adiciona(Selo $selo): void;

    /**
     * @return Selo[]
     */
    public function selosDeAlunosComCpf(Cpf $cpf): array;

}