<?php

namespace Alura\DesignPatterns\Pedido;

class TemplatePedido
{
    private string             $nomeCliente;
    private \DateTimeInterface $dataFinalizacao;

    public function __construct(string $nomeCliente, \DateTimeImmutable $dataFinalizacao)
    {
        $this->nomeCliente     = $nomeCliente;
        $this->dataFinalizacao = $dataFinalizacao;
    }

    public function getNomeCliente(): string
    {
        return $this->nomeCliente;
    }

    public function getDataFinalizacao(): \DateTimeImmutable
    {
        return $this->dataFinalizacao;
    }

}