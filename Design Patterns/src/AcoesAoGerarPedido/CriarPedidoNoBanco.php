<?php

namespace Alura\DesignPatterns\AcoesAoGerarPedido;

use Alura\DesignPatterns\Pedido;

class CriarPedidoNoBanco implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Salvando pedido no banco de dados" . PHP_EOL;
    }
}