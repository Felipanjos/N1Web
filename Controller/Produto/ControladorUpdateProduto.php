<?php 

require "Model/Comida.php";
require "Model/Bebida.php";
require_once "Controller/Controlador.php";

class ControladorUpdateProduto implements Controlador {

    private $produto;

    public function __construct() {
        if($_POST['categoria']) {
            if ($_POST['categoria'] == ('lanche' || 'almoco'|| 'doce')) {
                $this->produto = new Comida("comida");
            }        
            if ($_POST['categoria'] == "bebida") {
                $this->produto = new Bebida("bebida");
            }
        }
    }

    public function processaRequisicao() {
        $this->produto->setCodigo($_POST['codigo']);
        $this->produto->setNome($_POST['nome']);
        // $this->produto->setFoto($_POST['foto']);
        $this->produto->setPreco($_POST['preco']);
        $this->produto->setCategoria($_POST['categoria']);
        
        $this->produto->setFornecedor($_POST['fornecedor']);
        $this->produto->setIngredientes($_POST['ingredientes']);
        
        $this->produto->update();

        header('Location:readProduto', true, 302);
    }
}

?>