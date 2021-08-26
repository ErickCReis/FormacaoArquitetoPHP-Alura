<?php

namespace Alura\DesignPatterns\NotaFiscal;

use Alura\DesignPatterns\ItemOrcamento;

class NotaFiscal
{
    public string             $cnpjEmpresa;
    public string             $razaoSocialEmpresa;
    public string             $observacoes;
    public \DateTimeInterface $dataEmissao;
    public float              $valorImpostos;

    /** @var ItemOrcamento[] */
    public array $itens;

    public function valor(): float
    {
        return array_reduce(
            $this->itens,
            fn(float $valorAcumulado, ItemOrcamento $item) => $valorAcumulado + $item->valor,
            0
        );
    }

    public function clonar(): NotaFiscal
    {
        $cloneNotaFiscal                     = new NotaFiscal();
        $cloneNotaFiscal->cnpjEmpresa        = $this->cnpjEmpresa;
        $cloneNotaFiscal->razaoSocialEmpresa = $this->razaoSocialEmpresa;
        $cloneNotaFiscal->observacoes        = $this->observacoes;
        $cloneNotaFiscal->dataEmissao        = new \DateTimeImmutable();
        $cloneNotaFiscal->valorImpostos      = $this->valorImpostos;
        $cloneNotaFiscal->itens              = $this->itens;

        return $cloneNotaFiscal;
    }

    public function __clone()
    {
        $this->dataEmissao = new \DateTimeImmutable();
    }
}