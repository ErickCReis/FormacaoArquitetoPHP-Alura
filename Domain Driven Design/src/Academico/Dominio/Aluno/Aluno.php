<?php

namespace Alura\Arquitetura\Academico\Dominio\Aluno;

use Alura\Arquitetura\Shared\Dominio\Cpf;
use Alura\Arquitetura\Academico\Dominio\Email;

class Aluno
{
    private Cpf    $cpf;
    private string $nome;
    private Email  $email;
    private string $senha;

    /** @var Telefone[] */
    private array $telefones;

    public static function comCpfNomeEEmail(string $cpf, string $nome, string $email): self
    {
        return new Aluno(new Cpf($cpf), $nome, new Email($email));
    }

    public function __construct(Cpf $cpf, string $nome, Email $email)
    {
        $this->cpf       = $cpf;
        $this->nome      = $nome;
        $this->email     = $email;
        $this->telefones = [];
    }

    public function adicionarTelefone(string $ddd, string $numero): self
    {
        $telefone = Telefone::comDddENumero($ddd, $numero);

        if (count($this->telefones) === 2) {
            throw new AlunoJaTem2Telefones($telefone);
        }

        $this->telefones[] = $telefone;
        return $this;
    }

    public function cpf(): Cpf
    {
        return $this->cpf;
    }

    public function nome(): string
    {
        return $this->nome;
    }

    public function email(): string
    {
        return $this->email;
    }

    /** @return Telefone[] */
    public function telefones(): array
    {
        return $this->telefones;
    }
}