<?php

namespace Alura\DesignPatterns\Relatorio;

interface ArquivoExportado
{
    public function salvar(ConteudoExportado $conteudoExportado): string;
}