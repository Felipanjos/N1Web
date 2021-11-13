<?php 

require "Model/Produto.php";
require "Model/ProdutoDAO.php";
require_once "Controlador.php";

class ControladorReadProduto implements Controlador {

    public function processaRequisicao() {
        $retorno = ProdutoDAO::readAll();
        require "View/controleProdutos.php";
    }
}
?>