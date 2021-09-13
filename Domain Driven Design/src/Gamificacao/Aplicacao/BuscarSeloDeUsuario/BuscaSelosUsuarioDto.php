<?php

namespace Alura\Arquitetura\Gamificacao\Aplicacao\BuscarSeloDeUsuario;

class BuscaSelosUsuarioDto
{
    public string $cpfAluno;

    public function __construct(string $cpfAluno)
    {
        $this->cpfAluno = $cpfAluno;
    }

}