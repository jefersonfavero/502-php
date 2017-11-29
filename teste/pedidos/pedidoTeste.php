<?php
require_once "Estoque.php";

use PHPUnit\Framework\TestCase;

class PedidoTest extends TestCase
{
	private estoque;
	public function setup(){
		$this->estoque = $this->getmock("Estoque");
	}
	public function testDeveFecharPedido(){
		$item = 'blusa alca azu';
		$quantidade = 5;

		$this->estoque->expect($this->once())
		->method('get')
		->with($this->equalTo($item))
		->will($this->returnValue($quantidade));
		$this->estoque->expect($this->once())
		->method('remove')
		->with(
			$this->equalTo($item),
			$this->equalTo($quantidade)	
			);
		$pedido = new Pedido($item,$quantidade);
		$pedido->fechar($this->estoque);

		$this->assertTrue($pedido->isFinalizado());
	}
}

?>