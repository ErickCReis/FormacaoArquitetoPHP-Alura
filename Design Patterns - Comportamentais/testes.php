<?php

use Alura\DesignPatterns\CalculadorDeImpostos;
use Alura\DesignPatterns\Impostos\Icms;
use Alura\DesignPatterns\Impostos\Iss;
use Alura\DesignPatterns\Orcamento;

require "vendor/autoload.php";

$calculadora = new CalculadorDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Iss());