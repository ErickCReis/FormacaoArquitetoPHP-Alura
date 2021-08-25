<?php

namespace Alura\DesignPatterns\Log;

abstract class LogManager
{
    public function log(string $severidade, string $mensagem): void
    {
        $logWritter = $this->criarLogWritter();

        $dataHoje          = date('d/m/Y');
        $mensagemFormatada = "[$dataHoje][$severidade]: $mensagem" . PHP_EOL;
        $logWritter->escreve($mensagemFormatada);

    }

    abstract public function criarLogWritter(): LogWritter;
}