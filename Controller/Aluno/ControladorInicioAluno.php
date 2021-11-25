<?php 

require_once "Model/Aluno.php";
require_once "Controller/Controlador.php";
require_once "Model/ProdutoDAO.php";
require_once "Model/Produto.php";

class ControladorInicioAluno implements Controlador {

    public function processaRequisicao() {
        $retorno = AlunoDAO::read($_SESSION['login']);
        $produtos = ProdutoDAO::readAll();
        require "View/aluno.php";
    }
}
?>