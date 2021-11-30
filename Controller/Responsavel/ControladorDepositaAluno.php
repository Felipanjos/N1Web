<?php 

require_once "Controller/Controlador.php";
require_once "Model/Responsavel.php";
require_once "Model/Deposito.php";

class ControladorDepositaAluno implements Controlador {

  private $responsavel;
  private $deposito;

  public function __construct() {
    $this->responsavel = new Responsavel();
    $this->deposito = new Deposito();
  }
  
  public function processaRequisicao() {
    $this->responsavel->setLogin($_SESSION['login']);  
    $this->responsavel->readLogin();
    $this->responsavel->readFilhos();

    $this->deposito->setValor($_POST['valor']);
    $_POST['metodo'] === 'PIX' ? $this->deposito->setMetodo("PIX") : $this->deposito->setMetodo("Cartão de crédito/débito");
    $this->deposito->setIdaluno($this->responsavel->getFilhos()[0]->getId());

    $this->responsavel->deposita($this->deposito);

    header('Location: inicioResponsavel', true, 302);
  }
}
?>