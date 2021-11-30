<?php 

require_once "Model/Produto.php";
require_once "Controller/Controlador.php";

class ControladorDeleteProduto implements Controlador {

    private $produto;
    
    public function __construct() {
        $this->produto = new Produto();
    }

    public function processaRequisicao() {
        $this->produto->setCodigo($_POST['id']);
        $this->produto->delete();

        header('Location:readProduto', true, 302);
    }
}
?>