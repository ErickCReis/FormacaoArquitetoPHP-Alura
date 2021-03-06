<?php

namespace Alura\Arquitetura\Infra\Aluno;

use Alura\Arquitetura\Dominio\Aluno\Aluno;
use Alura\Arquitetura\Dominio\Aluno\AlunoNaoEncontrado;
use Alura\Arquitetura\Dominio\Aluno\RepositorioAluno;
use Alura\Arquitetura\Dominio\Cpf;

class RepositorioAlunoEmMemoria implements RepositorioAluno
{
    /** @var Aluno[] */
    private array $alunos = [];

    public function adicionar(Aluno $aluno): void
    {
        $this->alunos[] = $aluno;
    }

    public function buscarPorCpf(Cpf $cpf): Aluno
    {
        $alunosFiltrados = array_filter(
            $this->alunos,
            fn(Aluno $aluno) => $aluno->cpf() == $cpf
        );

        if (count($alunosFiltrados) === 0) {
            throw new AlunoNaoEncontrado($cpf);
        }

        if (count($alunosFiltrados) > 1) {
            throw new \DomainException('Aluno duplicado');
        }

        return $alunosFiltrados[0];
    }

    /**  @return Aluno[] */
    public function buscarTodos(): array
    {
        return $this->alunos;
    }

    public function adicionarTelefone(string $cpf, string $ddd, string $numero): void
    {
        $alunoEncontrado = $this->buscarPorCpf(new Cpf($cpf));

        foreach ($this->alunos as $aluno) {
            if ($aluno == $alunoEncontrado) {
                $aluno->adicionarTelefone($ddd, $numero);
            }
        }
    }
}