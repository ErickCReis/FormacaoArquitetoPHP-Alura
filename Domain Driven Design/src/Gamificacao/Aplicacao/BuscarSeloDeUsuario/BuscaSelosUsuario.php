<?php

namespace Alura\Arquitetura\Gamificacao\Aplicacao\BuscarSeloDeUsuario;

use Alura\Arquitetura\Gamificacao\Dominio\Selo\RepositorioSelo;
use Alura\Arquitetura\Gamificacao\Dominio\Selo\Selo;
use Alura\Arquitetura\Shared\Dominio\Cpf;

class BuscaSelosUsuario
{
    private RepositorioSelo $repositorioSelo;

    public function __construct(RepositorioSelo $repositorioSelo)
    {
        $this->repositorioSelo = $repositorioSelo;
    }

    /**
     * @return Selo[]
     */
    public function execute(BuscaSelosUsuarioDto $dados): array
    {
        $cpfAluno = new Cpf($dados->cpfAluno);

        return $this->repositorioSelo->selosDeAlunosComCpf($cpfAluno);
    }
}