<?php

namespace Alura\DesignPatterns\EstadosOrcamento;

use Alura\DesignPatterns\Orcamento;

class Reprovado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException(
            'Um orçamentos reprovado não pode receber desconto'
        );
    }

    public function finaliza(Orcamento $orcamento): void
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}