<?php

namespace Alura\Arquitetura\Shared\Dominio\Evento;

interface Evento extends \JsonSerializable
{

    public function nome(): string;

    public function momento(): \DateTimeImmutable;

}