<?php

namespace Alura\DesignPatterns\Log;

interface LogWritter
{
    public function escreve(string $mensagemFormatada): void;
}