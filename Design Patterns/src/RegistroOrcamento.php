<?php

namespace Alura\DesignPatterns;

use Alura\DesignPatterns\EstadosOrcamento\Finalizado;
use Alura\DesignPatterns\Http\HttpAdapter;

class RegistroOrcamento
{
    private HttpAdapter $httpAdapter;

    public function __construct(HttpAdapter $httpAdapter)
    {
        $this->httpAdapter = $httpAdapter;
    }

    public function registrar(Orcamento $orcamento): void
    {
        if (!$orcamento->estadoAtual instanceof Finalizado) {
            throw new \DomainException('Apenas orçamentos finalizados podem ser registrados na API.');
        }

        $this->httpAdapter->post('http://api.registar.orcamento', [
            "valor" => $orcamento->valor,
            "quantidade" => $orcamento->quantidadeItens,
        ]);
    }
}