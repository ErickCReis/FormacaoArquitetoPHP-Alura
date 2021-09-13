<?php

use Alura\Arquitetura\Academico\Aplicacao\Aluno\MatricularAluno\MatricularAluno;
use Alura\Arquitetura\Academico\Aplicacao\Aluno\MatricularAluno\MatricularAlunoDto;
use Alura\Arquitetura\Academico\Dominio\Aluno\LogAlunoMatriculado;
use Alura\Arquitetura\Academico\Infra\Aluno\RepositorioAlunoEmMemoria;
use Alura\Arquitetura\Gamificacao\Aplicacao\GeraSeloDeNovato;
use Alura\Arquitetura\Gamificacao\Infra\Selo\RepositorioSeloEmMemoria;
use Alura\Arquitetura\Shared\Dominio\Evento\PublicadorDeEvento;

require 'vendor/autoload.php';

$cpf    = $argv[1];
$nome   = $argv[2];
$email  = $argv[3];
$ddd    = $argv[4];
$numero = $argv[5];

$publicador = new PublicadorDeEvento();
$publicador->adicionarOuvinte(new LogAlunoMatriculado());
$publicador->adicionarOuvinte(new GeraSeloDeNovato(new RepositorioSeloEmMemoria()));

$useCase = new MatricularAluno(new RepositorioAlunoEmMemoria(), $publicador);

$useCase->executa(new MatricularAlunoDto($cpf, $nome, $email));