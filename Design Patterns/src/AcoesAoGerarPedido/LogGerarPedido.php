<?php

namespace Alura\DesignPatterns\AcoesAoGerarPedido;

use Alura\DesignPatterns\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Gerando log de geração de pedido" . PHP_EOL;
    }
}