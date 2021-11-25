<?php 

require "Model/Produto.php";
require_once "Model/ProdutoDAO.php";
require_once "Controller/Controlador.php";

class ControladorReadProduto implements Controlador {

    public function processaRequisicao() {
        $retorno = ProdutoDAO::readAll();
        require "View/controleProdutos.php";
    }
}
?>