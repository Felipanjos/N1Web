<?php 

require "Model/ResponsavelDAO.php";
require_once "Controller/Controlador.php";

class ControladorDeleteResponsavel implements Controlador {

    private $responsavel;

    public function __construct() {
        $this->responsavel = new Responsavel();
    }

    public function processaRequisicao() {
        $this->responsavel->setId($_POST['id']);
        $this->responsavel->delete();
        header('Location:readResponsavel', true, 302);
    }
}
?>