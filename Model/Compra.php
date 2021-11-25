<?php 

class Compra {

  private $total;
  private $aluno;
  private $produtos;
  private $data;

  public function __construct($aluno, $total, $produtos) {
    $this->data = date("d-m-Y H:m:s");
    $this->produtos = $produtos;
    $this->aluno = $aluno;
    $this->total = $total;
  }

  public function getTotal(){
		return $this->total;
	}

	public function setTotal($total){
		$this->total = $total;
	}

	public function getAluno(){
		return $this->aluno;
	}

	public function setAluno($aluno){
		$this->aluno = $aluno;
	}

	public function getProdutos(){
		return $this->produtos;
	}

	public function setProdutos($produtos){
		$this->produtos = $produtos;
	}

	public function getData(){
		return $this->data;
	}

	public function setData($data){
		$this->data = $data;
	}
}

?>