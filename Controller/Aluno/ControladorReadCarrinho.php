<?php

require_once "Model/AlunoDAO.php";
require_once "Controller/Controlador.php";
require_once "Model/Item.php";
require_once "Model/SessionCarrinho.php";

class ControladorReadCarrinho implements Controlador {
    private $carrinho;

    public function __construct(){
        $this->carrinho = new SessionCarrinho();  
    }

    public function processaRequisicao(){
        $itensCarrinho = $this->carrinho->getItensCarrinho();
        $carrinho = $this->carrinho;
        $aluno = AlunoDAO::read($_SESSION['login']);
        require "View/carrinho.php";
    }
}
?>