<?php 

require_once "Controller/Controlador.php";
require_once "Model/Aluno.php";

class ControladorCreateAluno implements Controlador {
  
  private $aluno;
  private $responsavel;

  public function __construct() {
    $this->aluno = new Aluno();
    $this->responsavel = new Responsavel();
    $this->responsavel->setLogin($_SESSION['login']);   
  }

  public function processaRequisicao() {
    $this->responsavel->readLogin();
    $this->responsavel->readFilhos();
    
    $this->aluno->setMatricula($_POST['matricula']);
    $this->aluno->setNome($_POST['nomeAluno']);
    $this->aluno->setPai($this->responsavel);
    $this->aluno->setTurno($_POST['turno']);
    $this->aluno->setTurma($_POST['turma']);
    $this->aluno->setTelefone($_POST['numeroAluno']);
    $this->aluno->setEmail($_POST['emailAluno']);
    $this->aluno->setLogin($_POST['loginAluno']);
    $this->aluno->setSenha($_POST['senhaAluno']);

    $this->aluno->create();

    header('Location: inicioResponsavel', true, 302);
  }
}
?>