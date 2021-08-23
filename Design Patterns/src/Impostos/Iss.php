<?php

namespace Alura\DesignPatterns\Impostos;

use Alura\DesignPatterns\Orcamento;

class Iss extends Imposto
{
    public function realizaCalculoEspecifico(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;
    }
}