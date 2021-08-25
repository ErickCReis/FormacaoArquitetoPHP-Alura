<?php

namespace Alura\DesignPatterns\Log;

class FileLogManager extends LogManager
{
    private string $caminhoArquivo;

    public function __construct(string $caminhoArquivo)
    {
        $this->caminhoArquivo = $caminhoArquivo;
    }

    function criarLogWritter(): LogWritter
    {
        return new FileLogWritter($this->caminhoArquivo);
    }
}