<?php

use Alura\Arquitetura\CPF;
use PHPUnit\Framework\TestCase;

class CpfTest extends TestCase
{
    public function testCpfInvalidoDeveRetornarUmaExecao()
    {
        $this->expectException(\InvalidArgumentException::class);
        new CPF('111222333');
    }

    public function testCpfValidoDeveRetornarUmaString()
    {
        $cpf = new CPF('123.456.789-00');
        $this->assertSame('123.456.789-00', (string) $cpf);
    }
}