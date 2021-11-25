<?php

require_once "Model/SessionCarrinho.php";
require_once "Model/Item.php";
require_once "Controller/Controlador.php";

class ControladorUpdateItemCarrinho implements Controlador {
     private $carrinhoSession;     
     
     public function __construct($carrinhoSession){
         $this->carrinhoSession = $carrinhoSession;
     }

     public function processaRequisicao(){
        if (isset($_POST['id']) && preg_match("/^[0-9]+/",$_POST['id'])) {
            $itemCarrinho = new ItemCarrinho($_POST['id'],$_POST['quantidade']);
            $this->carrinhoSession->atualizar($itemCarrinho);
        }
        header('Location: readCarrinho', true, 302);
     }
}
?>