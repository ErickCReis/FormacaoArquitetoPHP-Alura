<?php

namespace Alura\Arquitetura\Testes\Academico\Dominio;

use Alura\Arquitetura\Academico\Dominio\Email;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Alura\Arquitetura\Academico\Dominio\Email
 */
class EmailTest extends TestCase
{
    public function testEmailNoFormatoInvalidoNaoPodeExistir()
    {
        $this->expectException(\InvalidArgumentException::class);
        new Email('email inválido');
    }

    public function testEmailDevePoderSerRepresentadoComoString()
    {
        $email = new Email('example@example.com');
        self::assertSame('example@example.com', (string) $email);
    }
}