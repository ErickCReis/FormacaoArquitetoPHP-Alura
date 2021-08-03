<?php

namespace Alura\DesignPatterns\EstadosOrcamento;

use Alura\DesignPatterns\Orcamento;

class Finalizado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException(
            'Um orçamentos finalizado não pode receber desconto'
        );
    }
}