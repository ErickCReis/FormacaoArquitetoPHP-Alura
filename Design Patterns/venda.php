<?php

use Alura\DesignPatterns\Venda\VendaProdutoFactory;
use Alura\DesignPatterns\Venda\VendaServicoFactory;

require 'vendor/autoload.php';

$fabricaVenda = new VendaServicoFactory('Erick Reis');
$venda = $fabricaVenda->criarVenda();
$imposto = $fabricaVenda->imposto();

var_dump($venda, $imposto);

$fabricaVenda = new VendaProdutoFactory(1000);
$venda = $fabricaVenda->criarVenda();
$imposto = $fabricaVenda->imposto();

var_dump($venda, $imposto);
