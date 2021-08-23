<?php

require_once 'vendor/autoload.php';

use Alura\DesignPatterns\{Orcamento, Pedido};
use Alura\DesignPatterns\Relatorio\{
    ArquivoXmlExportado,
    ArquivoZipExportado,
    OrcamentoExportado,
    PedidoExportado
};

$orcamento = new Orcamento();
$orcamento->quantidadeItens = 7;
$orcamento->valor = 500;

$orcamentoExportado= new OrcamentoExportado($orcamento);

$orcamentoExportadoXml= new ArquivoXmlExportado('orcamento');
echo $orcamentoExportadoXml->salvar($orcamentoExportado) . PHP_EOL;

$orcamentoExportadoZip= new ArquivoZipExportado('orcamento.array');
echo $orcamentoExportadoZip->salvar($orcamentoExportado) . PHP_EOL;

$pedido = new Pedido();
$pedido->nomeCliente = 'Erick Reis';
$pedido->dataFinalizacao = new DateTime();

$pedidoExportado= new PedidoExportado($pedido);

$pedidoExportadoXml = new ArquivoXmlExportado('pedido');
echo $pedidoExportadoXml->salvar($pedidoExportado) . PHP_EOL;

$pedidoExportadoZip= new ArquivoZipExportado('pedido.array');
echo $pedidoExportadoZip->salvar($pedidoExportado) . PHP_EOL;
