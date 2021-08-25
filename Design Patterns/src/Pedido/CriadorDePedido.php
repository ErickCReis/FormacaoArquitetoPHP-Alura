<?php

namespace Alura\DesignPatterns\Pedido;

use Alura\DesignPatterns\Orcamento;

class CriadorDePedido
{
    private array $templates = [];

    public function criaPedido(
        string    $nomeCliente,
        string    $dataFormatada,
        Orcamento $orcamento
    ): Pedido
    {
        $template          = $this->gerarTemplatePedido($nomeCliente, $dataFormatada);

        var_dump($template);

        $pedido            = new Pedido();
        $pedido->template  = $template;
        $pedido->orcamento = $orcamento;

        return $pedido;
    }

    public function gerarTemplatePedido(string $nomeCliente, string $dataFormatada): TemplatePedido
    {
        $hash = md5($nomeCliente . $dataFormatada);

        if (!array_key_exists($hash, $this->templates)) {
            $template               = new TemplatePedido($nomeCliente, new \DateTimeImmutable($dataFormatada));
            $this->templates[$hash] = $template;
        }

        return $this->templates[$hash];
    }
}