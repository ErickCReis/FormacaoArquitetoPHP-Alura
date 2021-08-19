<?php

namespace Alura\DesignPatterns;

use Alura\DesignPatterns\EstadosOrcamento\Finalizado;

class ListaDeOrcamentos implements \IteratorAggregate
{
    /** @var Orcamento[] */
    private array $orcamentos = [];

    public function addOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos[] = $orcamento;
    }

    public function orcamentosFinalizados(): array
    {
        return array_filter(
            $this->orcamentos,
            fn (Orcamento $orcamento) => $orcamento->estadoAtual instanceof Finalizado
        );
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->orcamentos);
    }
}