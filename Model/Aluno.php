<?php 

require_once "Pessoa.php";
require_once "AlunoDAO.php";

class Aluno extends Pessoa {

    private $matricula;
    private $turma;
    private $turno;
    private $saldo;
    private $depositos = [];
    private $pai;
    private $id;
    
	public function __construct() {
        $this->setTipo("aluno");
    }

	public function create() {
		$alunoDAO = new AlunoDAO();
		$alunoDAO->create($this);
	}

	public function read() {
		$alunoDAO = new AlunoDAO();
		$alunoDAO->read($this);
	}

	public function readAll() {
		$alunoDAO = new AlunoDAO();
		$alunoDAO->readAll();
	}
	
	public function update() {
		$alunoDAO = new AlunoDAO();
		$alunoDAO->update($this);
	}
	
	public function delete() {
		$alunoDAO = new AlunoDAO();
		$alunoDAO->delete($this);
	}

	public function getMatricula(){
		return $this->matricula;
	}

	public function setMatricula($matricula){
		$this->matricula = $matricula;
	}

	public function getTurma(){
		return $this->turma;
	}

	public function setTurma($turma){
		$this->turma = $turma;
	}

	public function getTurno(){
		return $this->turno;
	}

	public function setTurno($turno){
		$this->turno = $turno;
	}

	public function getSaldo(){
		return $this->saldo;
	}

	public function setSaldo($saldo){
		$this->saldo = $saldo;
	}

	public function getDepositos(){
		return $this->depositos;
	}

	public function setDepositos($depositos){
		$this->depositos = $depositos;
	}

	public function getPai(){
		return $this->pai;
	}

	public function setPai($pai){
		$this->pai = $pai;
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}
}

?>