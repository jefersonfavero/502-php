<?php

require_once "estoque.php";

class Pedido
{
	private $item;
	private $quantidade;
	private $finalizado =false;

	public function __construct($item, $quantidade){
		$this->item = $item;
		$this->quantidade = $quantidade;
	}
	public function fechar(Estoque $estoque){
		if ($estoque->get($this->item) >= $this->quantidade){
			$this->finalizado = true;
			$estoque->remove($this->item, $this->quantidade);
		}
	}
	public function testNaoDeveFecharPedido(){
		$item = "Blussa x";
		$quantidade = 3;

		$this->estoque->expects($this->once())
		->method("get")
		->with($this->equalTo($item))
		->will($this->returnValue(0));
		$this->estoque->expects($this->never())
		->method("removeItem");

		$pedido = new Pedido($item, $quantidade);
		$pedido->fecharPedido($this->estoque);
		$this->assertFalse($pedido->isFinalizado());
	}

}

?>