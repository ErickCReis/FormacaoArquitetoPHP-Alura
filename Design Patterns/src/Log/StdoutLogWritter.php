<?php

namespace Alura\DesignPatterns\Log;

class StdoutLogWritter implements LogWritter
{
    public function escreve(string $mensagemFormatada): void
    {
        echo $mensagemFormatada;
    }
}