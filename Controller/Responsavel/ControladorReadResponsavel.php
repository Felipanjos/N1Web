<?php

require "Model/Responsavel.php";
require_once "Model/ResponsavelDAO.php";
require_once "Controller/Controlador.php";

class ControladorReadResponsavel implements Controlador {

    public function processaRequisicao() {
        $retorno = ResponsavelDAO::readAll();
        require "View/controleResponsaveis.php";
    }
}
?>