<?php

namespace Alura\Arquitetura\Academico\Infra\Aluno;

use Alura\Arquitetura\Academico\Dominio\Aluno\Aluno;
use Alura\Arquitetura\Academico\Dominio\Aluno\AlunoNaoEncontrado;
use Alura\Arquitetura\Academico\Dominio\Aluno\RepositorioAluno;
use Alura\Arquitetura\Academico\Dominio\Cpf;

class RepositorioAlunoComPdo implements RepositorioAluno
{
    private \PDO $conexao;

    public function __construct(\PDO $conexao)
    {
        $this->conexao = $conexao;
    }

    public function adicionar(Aluno $aluno): void
    {
        $sql  = 'INSERT INTO alunos VALUES (:cpf, :nome, :email);';
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue('cpf', $aluno->cpf());
        $stmt->bindValue('nome', $aluno->nome());
        $stmt->bindValue('email', $aluno->email());
        $stmt->execute();

        $sql  = 'INSERT INTO telefones VALUES (:ddd, :numero, :cpf_aluno);';
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue('cpf_aluno', $aluno->cpf());

        foreach ($aluno->telefones() as $telefone) {
            $stmt->bindValue('ddd', $telefone->ddd());
            $stmt->bindValue('numero', $telefone->numero());
            $stmt->execute();
        }
    }

    public function buscarPorCpf(Cpf $cpf): Aluno
    {
        $sql  = '
            SELECT cpf, nome, email, numero as numero_telefone 
                FROM alunos 
            LEFT JOIN telefones on alunos.cpf = telefones.cpf_aluno
                WHERE  alunos.cpf = ?;
        ';
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, (string)$cpf);
        $stmt->execute();

        $dadosAlunos = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        if (count($dadosAlunos) === 0) {
            throw new AlunoNaoEncontrado($cpf);
        }

        return $this->mapearAluno($dadosAlunos);
    }

    private function mapearAluno(array $dadosAlunos): Aluno
    {
        $primeiraLinha = $dadosAlunos[0];
        $aluno         = Aluno::comCpfNomeEEmail(
            $primeiraLinha['cpf'],
            $primeiraLinha['nome'],
            $primeiraLinha['email'],
        );

        $telefones = array_filter($dadosAlunos, fn($linha) => $linha['ddd'] !== null && $linha['numero_telefone'] !== null);
        foreach ($telefones as $linha) {
            $aluno->adicionarTelefone($linha['ddd'], $linha['numero_telefone']);
        }

        return $aluno;
    }

    /**  @return Aluno[] */
    public function buscarTodos(): array
    {
        $sql  = '
            SELECT cpf, nome, email, numero as numero_telefone 
                FROM alunos 
            LEFT JOIN telefones on alunos.cpf = telefones.cpf_aluno;
        ';
        $stmt = $this->conexao->query($sql);

        $listaAlunos = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        /** @var Aluno[] */
        $alunos = [];

        foreach ($listaAlunos as $dadosAluno) {
            if (!array_key_exists($dadosAluno['cpf'], $alunos)) {
                $alunos[$dadosAluno['cpf']] = Aluno::comCpfNomeEEmail(
                    $dadosAluno['cpf'],
                    $dadosAluno['nome'],
                    $dadosAluno['email'],
                );
            }

            if ($dadosAluno['ddd'] !== null && $dadosAluno['numero_telefone'] !== null) {
                $alunos[$dadosAluno['cpf']]->adicionarTelefone(
                    $dadosAluno['ddd'],
                    $dadosAluno['numero_telefone']
                );
            }
        }


        return $alunos;
    }


    public function adicionarTelefone(string $cpf, string $ddd, string $numero): void
    {
        // TODO: Implement adicionarTelefone() method.
    }
}