<?php

namespace Alura\Arquitetura\Infra\Indicacao;

use Alura\Arquitetura\Aplicacao\Indicacao\EnviaEmailIndicacao;
use Alura\Arquitetura\Dominio\Aluno\Aluno;

class EnviaEmailIndicacaoPhp implements EnviaEmailIndicacao
{

    public function enviaPara(Aluno $alunoIndicado): void
    {
        $message = "Parabéns {$alunoIndicado->nome()}, você foi indicado";

        $message = wordwrap($message, 70);

        mail($alunoIndicado->email(), 'Aluno Indicado', $message);
    }
}