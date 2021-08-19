<?php

use Alura\DesignPatterns\Http\ReactPHPHttpAdapter;
use Alura\DesignPatterns\Orcamento;
use Alura\DesignPatterns\RegistroOrcamento;
use Alura\DesignPatterns\Http\CurlHttpAdapter;

require_once 'vendor/autoload.php';

$registroOrcamento = new RegistroOrcamento(new ReactPHPHttpAdapter());
$registroOrcamento->registrar(new Orcamento());