<?php

require

use PHPUnit\Framework\TestCase;

class Exemplo1teste extends TestCase
{
	public function testCriacaoCliente(){
		$cliente = new Cliente('Lucas');

		$this->assertSame("lucas",$cliente->getNome());
	}
}