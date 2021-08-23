<?php

namespace Alura\DesignPatterns;

use Alura\DesignPatterns\EstadosOrcamento\EmAprovacao;
use Alura\DesignPatterns\EstadosOrcamento\EstadoOrcamento;

class Orcamento implements Orcavel
{
    /** @var ItemOrcamento[] */
    private array          $itens;
    public EstadoOrcamento $estadoAtual;


    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
        $this->itens       = [];
    }

    public function aplicaDescontoExtra()
    {
        $this->valor -= $this->estadoAtual->calculaDescontoExtra($this);
    }

    public function aprova()
    {
        $this->estadoAtual->aprova($this);
    }

    public function reprova()
    {
        $this->estadoAtual->reprova($this);
    }

    public function finaliza()
    {
        $this->estadoAtual->finaliza($this);
    }

    public function addItem(Orcavel $itemOrcamento)
    {
        $this->itens[] = $itemOrcamento;
    }

    public function valor(): float
    {
        return array_reduce(
            $this->itens,
            fn(float $valorAcumulado, Orcavel $item) => $item->valor() + $valorAcumulado,
            0
        );
    }

}