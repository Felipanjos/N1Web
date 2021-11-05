<?php 

require_once "BebidaDAO.php";
require_once "Produto.php";

class Bebida extends Produto {

    private $fornecedor;

    public function create() {
        $comidaDAO = new BebidaDAO();
		$comidaDAO->create($this);
    }

    public function delete() {
        $comidaDAO = new BebidaDAO();
		$comidaDAO->delete($this);
    }

    public function update() {
        $comidaDAO = new BebidaDAO();
		$comidaDAO->update($this);
    }
    
    public function read() {
        $comidaDAO = new BebidaDAO();
		$comidaDAO->read($this);
    }

    public function getFornecedor() {
        return $this->fornecedor;
    }
    public function setFornecedor($fornecedor) {
        $this->fornecedor = $fornecedor;
    }
    public function getIngredientes() {
        return null;
    }
    public function setIngredientes($ingredientes) {
        return null;
    }
}
?>