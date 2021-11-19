<?php 

require "Model/Responsavel.php";
require_once "Controlador.php";

class ControladorUpdateResponsavel implements Controlador {

    private $responsavel;

    public function __construct() {
        $this->responsavel = new Responsavel();
    }

    public function processaRequisicao() {

        $this->responsavel->setId($_POST['id']);
        $this->responsavel->setNome($_POST['nome']);
        $this->responsavel->setCpf($_POST['cpf']);
        $this->responsavel->setEmail($_POST['email']);
        $this->responsavel->setTelefone($_POST['telefone']);
        $this->responsavel->setLogin($_POST['login']);
        $this->responsavel->setSenha($_POST['senha']);

        $this->responsavel->update();

        header('Location:readResponsavel', true, 302);
    }
}

?>