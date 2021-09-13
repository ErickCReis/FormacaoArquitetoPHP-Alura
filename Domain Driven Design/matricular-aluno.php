<?php

use Alura\Arquitetura\Academico\Aplicacao\Aluno\MatricularAluno\MatricularAluno;
use Alura\Arquitetura\Academico\Aplicacao\Aluno\MatricularAluno\MatricularAlunoDto;
use Alura\Arquitetura\Academico\Dominio\Aluno\LogAlunoMatriculado;
use Alura\Arquitetura\Academico\Dominio\PublicadorDeEvento;
use Alura\Arquitetura\Academico\Infra\Aluno\RepositorioAlunoEmMemoria;

require 'vendor/autoload.php';

$cpf    = $argv[1];
$nome   = $argv[2];
$email  = $argv[3];
$ddd    = $argv[4];
$numero = $argv[5];

$publicador = new PublicadorDeEvento();
$publicador->adicionarOuvinte(new LogAlunoMatriculado());
$useCase = new MatricularAluno(new RepositorioAlunoEmMemoria(), $publicador);

$useCase->executa(new MatricularAlunoDto($cpf, $nome, $email));