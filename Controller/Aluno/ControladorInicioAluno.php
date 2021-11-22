<?php 

require_once "Model/Aluno.php";
require_once "Controller/Controlador.php";

class ControladorInicioAluno implements Controlador {

    public function processaRequisicao() {
        $retorno = AlunoDAO::read($_SESSION['login']);
        require "View/aluno.php";
    }
}
?>