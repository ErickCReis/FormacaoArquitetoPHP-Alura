<?php

namespace Alura\DesignPatterns;

class Pedido
{
    public string             $nomeCliente;
    public \DateTimeInterface $dataFinalizacao;
    public Orcamento          $orcamento;
}