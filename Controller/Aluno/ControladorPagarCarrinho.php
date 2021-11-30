<?php 

require_once "Controller/Controlador.php";
require_once "Model/Aluno.php";
require_once "Model/Compra.php";

class ControladorPagarCarrinho implements Controlador {

  private $aluno;
  private $compra;

  public function __construct() {
    $this->aluno = new Aluno();
  }

  public function processaRequisicao() {
    $this->aluno->setLogin($_SESSION['login']);
    $this->aluno->read();
    $this->compra = new Compra($this->aluno, $_POST['total'], trim($_POST['lista']));
    $this->aluno->setSaldo($this->aluno->getSaldo() - $this->compra->getTotal());
    AlunoDAO::pagar($this->aluno, $this->compra);
      
    header('Location: inicioAluno', true, 302);
  }
}
?>