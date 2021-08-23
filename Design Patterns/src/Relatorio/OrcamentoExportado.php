<?php

namespace Alura\DesignPatterns\Relatorio;

use Alura\DesignPatterns\Orcamento;

class OrcamentoExportado implements ConteudoExportado
{
    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function conteudo(): array
    {
        return [
            "valor"           => $this->orcamento->valor,
            "quantidadeItens" => $this->orcamento->quantidadeItens,
        ];
    }
}