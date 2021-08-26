<?php

namespace Alura\DesignPatterns\NotaFiscal;

use Alura\DesignPatterns\ItemOrcamento;

abstract class ConstrutorNotaFiscal
{
    protected NotaFiscal $notaFiscal;

    public function __construct()
    {
        $this->notaFiscal = new NotaFiscal();
        $this->notaFiscal->dataEmissao = new \DateTimeImmutable();
    }

    public function paraEmpresa(string $cnpj, string $razaoSocial): ConstrutorNotaFiscal
    {
        $this->notaFiscal->cnpjEmpresa        = $cnpj;
        $this->notaFiscal->razaoSocialEmpresa = $razaoSocial;

        return $this;
    }

    public function comItem(ItemOrcamento $item): ConstrutorNotaFiscal
    {
        $this->notaFiscal->itens[] = $item;

        return $this;
    }

    public function comObservacoes(string $observacoes): ConstrutorNotaFiscal
    {
        $this->notaFiscal->observacoes = $observacoes;

        return $this;
    }

    public function comDataEmissao(\DateTimeInterface $dataEmissao): ConstrutorNotaFiscal
    {
        $this->notaFiscal->dataEmissao = $dataEmissao;

        return $this;
    }

    public abstract function constroi(): NotaFiscal;
}