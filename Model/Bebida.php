<?php 

require_once "BebidaDAO.php";
require_once "Produto.php";

class Bebida extends Produto {

    public function __construct() {
        $this->setTipo("bebida");
        $this->setIngredientes(null);
    }

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
}
?>