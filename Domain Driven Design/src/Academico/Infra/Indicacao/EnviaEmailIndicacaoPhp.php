<?php

namespace Alura\Arquitetura\Academico\Infra\Indicacao;

use Alura\Arquitetura\Academico\Aplicacao\Indicacao\EnviaEmailIndicacao;
use Alura\Arquitetura\Academico\Dominio\Aluno\Aluno;

class EnviaEmailIndicacaoPhp implements EnviaEmailIndicacao
{

    public function enviaPara(Aluno $alunoIndicado): void
    {
        $message = "Parabéns {$alunoIndicado->nome()}, você foi indicado";

        $message = wordwrap($message, 70);

        mail($alunoIndicado->email(), 'Aluno Indicado', $message);
    }
}