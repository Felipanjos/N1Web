<?php 

require_once "Model/Aluno.php";
require_once "Controller/Controlador.php";
require_once "Model/ProdutoDAO.php";
require_once "Model/Produto.php";
require_once "Model/Deposito.php";

class ControladorInicioResponsavel implements Controlador {

  private $responsavel;

  public function __construct() {
      $this->responsavel = new Responsavel();
      $this->responsavel->setLogin($_SESSION['login']);
  }

    public function processaRequisicao() {
        $this->responsavel->readLogin();
        $this->responsavel->readFilhos();
        $retorno = $this->responsavel;
        $filhos = $this->responsavel->getFilhos();
        $saldo = $filhos[0]->getSaldo();
        $depositos = DepositoDAO::read($filhos[0]->getId());
        require "View/responsavel.php";
    }
}
?>