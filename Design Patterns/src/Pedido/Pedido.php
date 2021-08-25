<?php

namespace Alura\DesignPatterns\Pedido;

use Alura\DesignPatterns\Orcamento;

class Pedido
{
    public TemplatePedido $template;
    public Orcamento      $orcamento;
}