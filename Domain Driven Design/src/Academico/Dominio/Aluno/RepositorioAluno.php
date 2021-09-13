<?php

namespace Alura\Arquitetura\Academico\Dominio\Aluno;

use Alura\Arquitetura\Academico\Dominio\Cpf;

interface RepositorioAluno
{
    public function adicionar(Aluno $aluno): void;

    public function adicionarTelefone(string $cpf, string $ddd, string $numero): void;

    public function buscarPorCpf(Cpf $cpf): Aluno;

    /** @return Aluno[] */
    public function buscarTodos(): array;
}