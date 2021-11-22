<?php 

require "Model/Responsavel.php";
require_once "Model/ResponsavelDAO.php";
require_once "Controller/Controlador.php";

class ControladorFormUpdateResponsavel implements Controlador {

    private $responsavel;

    public function __construct() {
        $this->responsavel = new Responsavel();
    }

    public function processaRequisicao() {
        $this->responsavel->setId($_POST['id']);
        $this->responsavel->read();
        $id = $this->responsavel->getId();
        $nome = $this->responsavel->getNome();
        $cpf = $this->responsavel->getCpf();
        $email = $this->responsavel->getEmail();
        $telefone = $this->responsavel->getTelefone();
        $login = $this->responsavel->getLogin();
        $senha = $this->responsavel->getSenha();
        require "View/alterarResponsavel.php";
    }
}
?>