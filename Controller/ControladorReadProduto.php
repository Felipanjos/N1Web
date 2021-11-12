<?php 

require "Model/Produto.php";
require "Model/ProdutoDAO.php";
require_once "Controlador.php";

class ControladorReadProduto implements Controlador {

    private $produto;

    public function __construct() {
        $this->produto = new Produto();
    }

    public function processaRequisicao() {
        $retorno = $this->produto->read();
        require "View/controleProdutos.php";
    }
}
?>