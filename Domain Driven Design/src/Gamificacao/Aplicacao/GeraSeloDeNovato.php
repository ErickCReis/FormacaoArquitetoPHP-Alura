<?php

namespace Alura\Arquitetura\Gamificacao\Aplicacao;

use Alura\Arquitetura\Gamificacao\Dominio\Selo\RepositorioSelo;
use Alura\Arquitetura\Gamificacao\Dominio\Selo\Selo;
use Alura\Arquitetura\Shared\Dominio\Evento\Evento;
use Alura\Arquitetura\Shared\Dominio\Evento\OuvinteDeEvento;

class GeraSeloDeNovato extends OuvinteDeEvento
{
    private RepositorioSelo $repositorioSelo;

    public function __construct(RepositorioSelo $repositorioSelo)
    {
        $this->repositorioSelo = $repositorioSelo;
    }

    public function sabeProcessar(Evento $evento): bool
    {
        return $evento->nome() === 'aluno-matriculado';
    }

    public function reageAo(Evento $evento): void
    {
        $array = $evento->jsonSerialize();
        $cpf   = $array['cpfAluno'];

        $selo = new Selo($cpf, 'Novato');
        $this->repositorioSelo->adiciona($selo);
    }
}