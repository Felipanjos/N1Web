<?php 

require "Model/Aluno.php";
require_once "Controller/Controlador.php";

class ControladorUpdateAluno implements Controlador {

    private $aluno;

    public function __construct() {
        $this->aluno = new Aluno();
    }

    public function processaRequisicao() {
        $this->aluno->setLogin($_POST['login']);
        $this->aluno->read();
        $this->aluno->setId($_POST['id']);
        $this->aluno->setNome($_POST['nome']);
        $this->aluno->setEmail($_POST['email']);
        $this->aluno->setTelefone($_POST['telefone']);
        $this->aluno->setLogin($_POST['login']);
        $this->aluno->setSenha($_POST['senha']);

        $this->aluno->update();

        header('Location:inicioResponsavel', true, 302);
    }
}

?>