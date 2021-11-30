<?php 

require_once "Model/DepositoDAO.php";

class Deposito {

  private $id;
  private $data;
  private $valor;
  private $idaluno;
  private $metodo;

  public function read($aluno) {
    $depositoDAO = new DepositoDAO();
    $depositoDAO->read($aluno);
  }
 
  public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getData(){
		return $this->data;
	}

	public function setData($data){
		$this->data = $data;
	}

	public function getValor(){
		return $this->valor;
	}

	public function setValor($valor){
		$this->valor = $valor;
	}

	public function getIdaluno(){
		return $this->idaluno;
	}

	public function setIdaluno($idaluno){
		$this->idaluno = $idaluno;
	}
  
	public function getMetodo(){
		return $this->metodo;
	}

	public function setMetodo($metodo){
		$this->metodo = $metodo;
	}
}
?>