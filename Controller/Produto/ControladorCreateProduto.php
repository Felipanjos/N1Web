<?php 

require "Model/Comida.php";
require "Model/Bebida.php";
require_once "Controller/Controlador.php";

class ControladorFormCreateProduto implements Controlador {

    private $produto;
    
    public function __construct() {
        if(isset($_POST['categoria'])) {
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
        $this->produto->setPreco($_POST['preco']);
        $this->produto->setCategoria($_POST['categoria']);
        
        $this->produto->setFornecedor($_POST['fornecedor']);
        $this->produto->setIngredientes($_POST['ingredientes']);

        $this->produto->create();
        
        header('Location:readProduto', true, 302);
    }
}
?>  