<?php
require_once "Estoque.php";

use PHPUnit\Framework\TestCase;

class EstoqueTest extends TestCase
{
	private $estoque;
	public function testAddItem(){
		$item = "bluza x";
	

		$estoque = new Estoque();
		$estoque->addItem($item, 1);
		$estoque->addItem($item, 2);
		$estoque->addItem($item, 3);

		$this->assertSame(6, $estoque->getItem($item));
	}

	/**
	  * @expectedException InvalidArgumentException
	  * @expectedExceptionMessage Item nao existe no estoque
	  */
	public function testIteminvalido(){
		$estoque = new Estoque();
		$estoque->getItem("bluza Y");
	}
	public function testRemoveQuantidade(){
		$estoque = new Estoque();
		$estoque->addItem("blusa A", 10);
		$estoque->removeItem("blusa A", 4);
		$this->assertSame(6,$estoque->getItem("blusa A"));
	}

}
?>