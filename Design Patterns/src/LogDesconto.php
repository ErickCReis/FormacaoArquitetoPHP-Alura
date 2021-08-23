<?php

namespace Alura\DesignPatterns;

class LogDesconto
{
    public function informar(float $descontoCalculado): void
    {
        echo "Salvando log de desconto " . $descontoCalculado . PHP_EOL;
    }
}