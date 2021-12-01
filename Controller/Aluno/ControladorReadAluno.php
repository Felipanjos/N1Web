<?php 

require_once "Controller/Controlador.php";
require_once "Model/AlunoDAO.php";
require_once "Model/Deposito.php";

class ControladorReadAluno implements Controlador {

    private $aluno;
    
    public function __construct() {
        $this->aluno = new Aluno();
    }
    
    public function processaRequisicao() {
        $this->aluno->setLogin($_SESSION['login']);
        $this->aluno->read();
        $depositos = DepositoDAO::readAll($this->aluno->getId());
        require "View/alunoInfo.php";
    }
}
?>