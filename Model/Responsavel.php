<?php 

require "Pessoa.php";
require_once "ResponsavelDAO.php";

class Responsavel extends Pessoa {

    private $id;
	private $cpf;
    private $filhos = [];

	public function create() {
		$responsavelDAO = new ResponsavelDAO();
		$responsavelDAO->create($this);
	}

	public function read() {
		$responsavelDAO = new ResponsavelDAO();
		$responsavelDAO->read($this);
	}

	public function readAll() {
		$responsavelDAO = new ResponsavelDAO();
		$responsavelDAO->readAll();
	}
	
	public function update() {
		$responsavelDAO = new ResponsavelDAO();
		$responsavelDAO->update($this);
	}
	
	public function delete() {
		$responsavelDAO = new ResponsavelDAO();
		$responsavelDAO->delete($this);
	}

    public function __construct() {
        $this->tipo = "responsavel";
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
}
?>