<?php

require_once "Model/SessionCarrinho.php";
require_once "Model/Item.php";
require_once "Controller/Controlador.php";

class ControladorAddItemCarrinho implements Controlador {
     private $carrinhoSession; 
     
     public function __construct($carrinhoSession){
         $this->carrinhoSession = $carrinhoSession;
     }

     public function processaRequisicao(){
        if (isset($_POST['id']) && preg_match("/^[0-9]+/", $_POST['id'])){

            $itemCarrinho = new ItemCarrinho($_POST['id'], 1);
            $this->carrinhoSession->adicionar($itemCarrinho);
        }
        header('Location: readCarrinho', true, 302);
     }
}
?>