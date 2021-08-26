<?php

namespace Alura\DesignPatterns\Venda;

use Alura\DesignPatterns\Impostos\Imposto;

interface VendaFactory
{
    public function criarVenda(): Venda;
    public function imposto(): Imposto;
}