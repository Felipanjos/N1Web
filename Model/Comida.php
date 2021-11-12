<?php 

require_once "ComidaDAO.php";
require_once "Produto.php";

class Comida extends Produto {

    public function __construct() {
        $this->setTipo("comida");
        $this->setIngredientes(null);
    }

    public function create() {
        $comidaDAO = new ComidaDAO();
		$comidaDAO->create($this);
    }

    public function delete() {
        $comidaDAO = new ComidaDAO();
		$comidaDAO->delete($this);
    }

    public function update() {
        $comidaDAO = new ComidaDAO();
		$comidaDAO->update($this);
    }

    public function read() {
        $comidaDAO = new ComidaDAO();
		$comidaDAO->read();
    }
}
?>