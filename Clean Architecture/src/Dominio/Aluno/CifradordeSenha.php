<?php

namespace Alura\Arquitetura\Dominio\Aluno;

interface CifradordeSenha
{
    public function cifrar(string $senha): string;

    public function verificar(string $senhaEmTexto, string $senhaCifrada): bool;
}