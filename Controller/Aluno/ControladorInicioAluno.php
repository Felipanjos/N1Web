<?php 

require_once "Model/Aluno.php";
require_once "Controller/Controlador.php";
require_once "Model/ProdutoDAO.php";
require_once "Model/Produto.php";

class ControladorInicioAluno implements Controlador {

    private $aluno;

    public function __construct() {
        $this->aluno = new Aluno();
    }

    public function processaRequisicao() {
        $this->aluno->setLogin($_SESSION['login']);
        $this->aluno->read();
        $produtos = ProdutoDAO::readAll();
        require "View/aluno.php";
    }
}
?>