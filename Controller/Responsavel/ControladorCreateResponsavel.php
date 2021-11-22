<?php 

require_once "Model/Responsavel.php";
require_once "Controller/Controlador.php";

class ControladorCreateResponsavel implements Controlador {

    private $responsavel;

    public function __construct() {
        $this->responsavel = new Responsavel();
    }

    public function processaRequisicao() {
        $this->responsavel->setNome($_POST['nome'] . ' ' . $_POST['sobrenome']);
        $this->responsavel->setCpf($_POST['cpf']);
        $this->responsavel->setTelefone($_POST['telefone']);
        $this->responsavel->setEmail($_POST['email']);
        $this->responsavel->setLogin($_POST['login']);
        $this->responsavel->setSenha($_POST['senha']);

        var_dump($this->responsavel->getTipo());

        $this->responsavel->create();

        header('Location:readResponsavel', true, 302);
    }
}

?>