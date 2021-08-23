<?php

namespace Alura\DesignPatterns;

use Alura\DesignPatterns\Descontos\DescontoMaisDe500Reais;
use Alura\DesignPatterns\Descontos\DescontoMaisDe5Items;
use Alura\DesignPatterns\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new DescontoMaisDe5Items(
            new DescontoMaisDe500Reais(
                new SemDesconto()
            )
        );

        $descontoCalculado = $cadeiaDeDescontos->calculaDesconto($orcamento);

        $logDesconto = new LogDesconto();
        $logDesconto->informar($descontoCalculado);

        return $descontoCalculado;
    }
}