<?php

namespace Alura\Arquitetura\Academico\Dominio\Aluno;

class AlunoJaTem2Telefones extends \DomainException
{

    public function __construct(Telefone $telefone)
    {
        parent::__construct("Aluno com já tem 2 telefones. Não foi possível adicionar $telefone.");
    }
}