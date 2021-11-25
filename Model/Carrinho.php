<?php
class Carrinho{
    private $produto;
    private $quantidade;

    public function getProduto() {
        return $this->produto;
    }
    public function getQuantidade() {
        return $this->quantidade;
    }
    public function setProduto($produto) {
        $this->produto = $produto;
    }
    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }
 }
?>