<?php

namespace Alura\DesignPatterns;

class CacheOrcamentoProxy extends Orcamento
{
    private float     $valorCache = 0;
    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function aplicaDescontoExtra()
    {
        $this->orcamento->aplicaDescontoExtra();
    }

    public function aprova()
    {
        $this->orcamento->aprova($this);
    }

    public function reprova()
    {
        $this->orcamento->reprova($this);
    }

    public function finaliza()
    {
        $this->orcamento->finaliza($this);
    }

    public function addItem(Orcavel $itemOrcamento)
    {
        throw new \DomainException('Não é possivel adicional item aorçamento cacheado');
    }

    public function valor(): float
    {
        if ($this->valorCache == 0) {
            $this->valorCache = $this->orcamento->valor();
        }

        return $this->valorCache;
    }
}