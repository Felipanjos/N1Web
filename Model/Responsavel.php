<?php 

require_once "Pessoa.php";
require_once "ResponsavelDAO.php";

class Responsavel extends Pessoa {

	private $id;
	private $cpf;
	private $filhos = array();

	public function __construct() {
			$this->setTipo("responsavel");
	}

	public function create() {
		$responsavelDAO = new ResponsavelDAO();
		$responsavelDAO->create($this);
	}

	public function read() {
		$responsavelDAO = new ResponsavelDAO();
		$responsavelDAO->read($this);
	}

	public function readLogin() {
		$responsavelDAO = new ResponsavelDAO();
		$responsavelDAO->readLogin($this);
	}

	public function readFilhos() {
		$responsavelDAO = new ResponsavelDAO();
		$responsavelDAO->readFilhos($this);
	}

	public function readAll() {
		$responsavelDAO = new ResponsavelDAO();
		$responsavelDAO->readAll();
	}
	
	public function update() {
		$responsavelDAO = new ResponsavelDAO();
		$responsavelDAO->update($this);
	}

	public function deposita($deposito) {
		$responsavelDAO = new ResponsavelDAO();
		$responsavelDAO->deposita($this, $deposito);
	}
	
	public function delete() {
		$responsavelDAO = new ResponsavelDAO();
		$responsavelDAO->delete($this);
	}

	public function getCpf() {
			return $this->cpf;
	}
	
	public function setCpf($cpf) {
			$this->cpf = $cpf;
	}

	public function getId() {
			return $this->id;
	}
	
	public function setId($id) {
			$this->id = $id;
	}

	public function getFilhos() {
			return $this->filhos;
	}

	public function setFilhos($filhos) {
		$this->filhos = $filhos;
	}

	public function addFilho($filho) {
		array_push($this->filhos, $filho);
	}
}
?>