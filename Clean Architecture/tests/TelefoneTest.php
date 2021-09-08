<?php

namespace Alura\Arquitetura\Testes;

use Alura\Arquitetura\Telefone;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Alura\Arquitetura\Telefone
 */
class TelefoneTest extends TestCase
{
    public function testTelefoneDevePoderSerRepresentadoComoString()
    {
        $telefone = new Telefone('12', '12345678');
        self::assertSame('(12) 12345678', (string) $telefone);
    }

    public function testTelefoneComDddInvalidoNaoDeveExistir()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('DDD inválido');
        new Telefone('ddd', '12345678');
    }

    public function testTelefoneComNumeroInvalidoNaoDeveExistir()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Número de telefone inválido');
        new Telefone('12', 'numero');
    }
}