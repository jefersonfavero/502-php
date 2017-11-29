<?php

class Estoque
{
	private $item = [];

	public function addItem($item,$quantidade){
		if (isset($this->itens[$item])) {
			$quantidade += $this->itens[$item];
		}
			$this->itens[$item] = $quantidade;
	}
	public function getItem($item){

		if (isset($this->itens[$item])){
			return $this->itens[$item];
		}

		throw new InvalidArgumentException("Item nao existe no estoque");
	}
	public function removeItem($item, $quantidade){
			if (isset($this->itens[$item])){
				$this->itens[$item] -= $quantidade;
			}
		}
}

?>