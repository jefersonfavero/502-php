<?php
use PHPUnit\Framework\TestCase;
require_once "Calculadora.php";

class CalculadoraTeste extends TestCase
{
	public function testSoma(){
	
		$calculadora = new Calculadora(4,5);

		$this->assertSame(12,$calculadora->soma());
	}	
	// public function testSubt(){
		
	// }
	// public function testMult(){
		
	// }
	// public function testdivi(){
		
	// }
}

?>