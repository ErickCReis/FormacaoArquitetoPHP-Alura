<?php

namespace Alura\DesignPatterns;

use Alura\DesignPatterns\Impostos\Imposto;

class CalculadorDeImpostos
{
    public function calcula(Orcamento $orcamento, Imposto $imposto): float
    {
        return $imposto->calculaImposto($orcamento);
    }
}