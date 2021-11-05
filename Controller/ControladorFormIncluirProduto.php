<?php 

require_once "Model/Produto.php";
require_once "Model/Bebida.php";
require_once "Model/Comida.php";

class ControladorFormIncluirProduto {

    private $produto;
    
    public function __construct() {
        if ($_POST['categoria'] == ('lanche' || 'almoco'|| 'doce')) {
            $this->produto = new Comida();
            $this->produto->setTipo("comida");
        }        
        if ($_POST['categoria'] == "bebida") {
            $this->produto = new Bebida();
            $this->produto->setTipo("bebida");
        }
    }

    public function processaRequisicao() {
        
        $this->produto->setCodigo($_POST['codigo']);
        $this->produto->setNome($_POST['nome']);
        $this->produto->setPreco($_POST['preco']);
        $this->produto->setCategoria($_POST['categoria']);
        
        $this->produto->setFornecedor($_POST['fornecedor']);
        $this->produto->setIngredientes($_POST['ingredientes']);
        // $this->produto->setFoto($_POST['foto']);

        $this->produto->create();

        foreach($_POST as $key=>$val) {
            if($key != 'submit') {
                echo $key . "=>" . $val . "<br/>";
            }
        }
    }
}
?>  