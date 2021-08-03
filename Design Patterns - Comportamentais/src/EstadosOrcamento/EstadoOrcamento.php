<?php

namespace Alura\DesignPatterns\EstadosOrcamento;

use Alura\DesignPatterns\Orcamento;
use DomainException;

abstract class EstadoOrcamento
{
    /**
     * @param Orcamento $orcamento
     * @return float
     * @throws DomainException
     */
    abstract public function calculaDescontoExtra(Orcamento $orcamento): float;

    public function aprova(Orcamento $orcamento): void
    {
        throw new DomainException('Este orçamento não pode ser aprovado');
    }

    public function reprova(Orcamento $orcamento): void
    {
        throw new DomainException('Este orçamento não pode ser reprovado');
    }

    public function finaliza(Orcamento $orcamento): void
    {
        throw new DomainException('Este orçamento não pode ser finalizado');
    }
}