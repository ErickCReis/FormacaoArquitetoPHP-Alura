<?php

namespace Alura\DesignPatterns\Venda;

class VendaProduto extends Venda
{
    private int $pesoProduto;

    public function __construct(\DateTimeInterface $dataRealizacao, int $nomePrestador)
    {
        parent::__construct($dataRealizacao);

        $this->pesoProduto = $nomePrestador;
    }

}