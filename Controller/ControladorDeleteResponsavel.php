<?php 

require "Model/ResponsavelDAO.php";
require_once "Controlador.php";

class ControladorDeleteResponsavel implements Controlador {

    public function processaRequisicao() {
                
        ResponsavelDAO::delete($_POST['id']);

        header('Location:readResponsavel', true, 302);
    }
}
?>