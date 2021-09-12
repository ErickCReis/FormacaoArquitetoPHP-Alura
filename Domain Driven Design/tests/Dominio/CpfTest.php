<?php

namespace Alura\Arquitetura\Testes\Dominio;

use Alura\Arquitetura\Dominio\Cpf;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Alura\Arquitetura\Dominio\Cpf
 */
class CpfTest extends TestCase
{
    public function testCpfComNumeorNoFormatoInvalidoNaoPodeExistir()
    {
        $this->expectException(\InvalidArgumentException::class);
        new Cpf('12345678910');
    }

    public function testCpfDevePoderSerRepresentadoComoString()
    {
        $cpf = new Cpf('123.456.789-10');
        self::assertSame('123.456.789-10', (string) $cpf);
    }
}