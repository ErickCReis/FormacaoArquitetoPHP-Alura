<?php

namespace Alura\DesignPatterns\Http;

interface HttpAdapter
{
    public function post(string $url, array $data = []): void;
}