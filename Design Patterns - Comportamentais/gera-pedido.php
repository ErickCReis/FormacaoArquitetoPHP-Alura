<?php

require_once 'vendor/autoload.php';

use Alura\DesignPatterns\GerarPedido;
use Alura\DesignPatterns\GerarPedidoHandler;
use Alura\DesignPatterns\Orcamento;
use Alura\DesignPatterns\Pedido;

$valorOrcamento = $argv[1];
$numeroDeItens  = $argv[2];
$nomeCliente    = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);

$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->execute($gerarPedido);
