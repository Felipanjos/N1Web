<?php 

require "Model/Aluno.php";
require_once "Model/AlunoDAO.php";
require_once "Controller/Controlador.php";

class ControladorFormUpdateAluno implements Controlador {

    private $aluno;

    public function __construct() {
        $this->aluno = new Aluno();
    }
    
    public function processaRequisicao() {
        $this->aluno->setLogin($_POST['login']);
        $this->aluno->read();

        $id = $this->aluno->getId();
        $nome = $this->aluno->getNome();
        $email = $this->aluno->getEmail();
        $telefone = $this->aluno->getTelefone();
        $login = $this->aluno->getLogin();
        $senha = $this->aluno->getSenha();
        require "View/updateAluno.php";
    }
}
?>