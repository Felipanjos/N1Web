<?php

require_once "Model/AlunoDAO.php";
require_once "Controller/Controlador.php";
require_once "Model/Item.php";
require_once "Model/SessionCarrinho.php";

class ControladorReadCarrinho implements Controlador {
    
    private $carrinho;
    private $aluno;

    public function __construct(){
        $this->carrinho = new SessionCarrinho();  
        $this->aluno = new Aluno();  
    }

    public function processaRequisicao(){
        $itensCarrinho = $this->carrinho->getItensCarrinho();
        $carrinho = $this->carrinho;
        $this->aluno->setLogin($_SESSION['login']);
        $this->aluno->read();
        require "View/carrinho.php";
    }
}
?>