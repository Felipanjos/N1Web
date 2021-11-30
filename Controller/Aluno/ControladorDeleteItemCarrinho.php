<?php
require_once "Model/SessionCarrinho.php";
require_once "Model/Item.php";
require_once "Controller/Controlador.php";

class ControladorDeleteItemCarrinho implements Controlador {
    private $carrinhoSession;     
     
    public function __construct($carrinhoSession){
    $this->carrinhoSession = $carrinhoSession;
    }

    public function processaRequisicao(){
    if (isset($_POST['id']) && preg_match("/^[0-9]+/",$_POST['id'])) {
        
        $this->carrinhoSession->apagar($_POST['id']);
    }
    header('Location: readCarrinho', true,302);
    }
}
?>