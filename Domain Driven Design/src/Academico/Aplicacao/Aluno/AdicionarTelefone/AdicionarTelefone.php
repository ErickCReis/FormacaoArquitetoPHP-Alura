<?php

namespace Alura\Arquitetura\Academico\Aplicacao\Aluno\AdicionarTelefone;

use Alura\Arquitetura\Academico\Dominio\Aluno\RepositorioAluno;

class AdicionarTelefone
{
    private RepositorioAluno $repositorioAluno;

    public function __construct(RepositorioAluno $repositorioAluno)
    {
        $this->repositorioAluno = $repositorioAluno;
    }

    public function executa(AdicionarTelefoneDto $dados): void
    {
        $this->repositorioAluno->adicionarTelefone(
            $dados->cpfAluno,
            $dados->dddTelefone,
            $dados->numeroTelefone
        );
    }
}