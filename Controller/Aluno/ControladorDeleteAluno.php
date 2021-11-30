<?php 

require "Model/AlunoDAO.php";
require_once "Controller/Controlador.php";

class ControladorDeleteAluno implements Controlador {

  private $aluno;

  public function __construct() {
    $this->aluno = new Aluno();
  }

  public function processaRequisicao() {
    $this->aluno->setLogin($_POST['login']);
    $this->aluno->read();
    $this->aluno->delete();
    ResponsavelDAO::delete($_POST['id']);
    header('Location: inicioResponsavel', true, 302);
  }
}
?>