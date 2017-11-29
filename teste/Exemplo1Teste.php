<?php

use PHPUnit\Framework\TestCase;

class Exemplo1teste extends TestCase
{
	public function testSoma(){
		$soma = 2 + 3;

		$this->assertSame(5,$soma);
	}
	public function testTrue(){
		$verdadeiro = true;

		$this->assertTrue($verdadeiro);
	}
	public function testFalse(){
		$verdadeiro = true;

		$this->assertTrue($verdadeiro);
	}
	public function testCount(){
		$array = [0,1,2];

		$this->assertCount(3,$array);
	}
	public function testeEmpty(){
		$vazio = "";

		$this->assertEmpty($vazio);
	}
	public function testNull(){
		$vazio = Null;

		$this->assertNull($vazio);
	}
	public function testEqual(){
		$a = "1";
		$b = "1";

		$this->assertEquals($a,$b);
	}

}

