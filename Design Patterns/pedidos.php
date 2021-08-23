<?php

use Alura\DesignPatterns\DadosExtrinsecosPedidos;
use Alura\DesignPatterns\Orcamento;
use Alura\DesignPatterns\Pedido;

require 'vendor/autoload.php';

$pedidos = [];
$dados   = new DadosExtrinsecosPedidos(md5('nome'), new DateTimeImmutable());

for ($i = 0; $i < 10000; $i++) {
    $pedido            = new Pedido();
    $pedido->dados     = $dados;
    $pedido->orcamento = new Orcamento();

    $pedidos[] = $pedido;
}

echo memory_get_peak_usage();