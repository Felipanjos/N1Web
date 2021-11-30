<?php 

require "Model/Produto.php";
require_once "Model/ProdutoDAO.php";
require_once "Controller/Controlador.php";

class ControladorFormUpdateProduto implements Controlador {

    private $produto;

    public function __construct() {
        $this->produto = new Produto();
    }

    public function processaRequisicao() {
        $this->produto->setCodigo($_POST['id']);
        $this->produto->read();
        $codigo = $this->produto->getCodigo();
        $nome = $this->produto->getNome();
        $categoria = $this->produto->getCategoria();
        $preco = $this->produto->getPreco();
        $fornecedor = $this->produto->getFornecedor();
        $ingredientes = $this->produto->getIngredientes();
        require "View/updateProduto.php";
    }
}
?>