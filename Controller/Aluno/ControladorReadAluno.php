<?php 

require_once "Controller/Controlador.php";
require_once "Model/AlunoDAO.php";

class ControladorReadAluno implements Controlador {

    public function processaRequisicao() {
        $retorno = AlunoDAO::read($_SESSION['login']);
        require "View/alunoInfo.php";
    }
}

?>