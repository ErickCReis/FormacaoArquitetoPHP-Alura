<?php

use Alura\DesignPatterns\ItemOrcamento;
use Alura\DesignPatterns\NotaFiscal\ConstrutorNotaFiscalProduto;
use Alura\DesignPatterns\NotaFiscal\ConstrutorNotaFiscalServico;

require 'vendor/autoload.php';

$builder = new ConstrutorNotaFiscalProduto();

$item1        = new ItemOrcamento();
$item1->valor = 500;
$item2        = new ItemOrcamento();
$item2->valor = 1500;
$item3        = new ItemOrcamento();
$item3->valor = 1000;

$notaFiscal = $builder
    ->paraEmpresa('123123', 'Empresa Teste')
    ->comItem($item1)
    ->comItem($item2)
    ->comItem($item3)
    ->comObservacoes('Esta nota fiscal foi construida com um construtor')
    ->constroi();

$notaFical2 = clone $notaFiscal;
$notaFical2->itens[] = new ItemOrcamento();

var_dump($notaFiscal, $notaFical2);