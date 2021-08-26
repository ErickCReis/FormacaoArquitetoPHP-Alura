<?php

namespace Alura\DesignPatterns\Venda;

abstract class Venda
{
    public \DateTimeInterface $dataRealizacao;

    public function __construct(\DateTimeInterface $dataRealização)
    {
        $this->dataRealizacao = $dataRealização;
    }
}