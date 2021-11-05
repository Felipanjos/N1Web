<?php 

require_once "ComidaDAO.php";
require_once "Produto.php";

class Comida extends Produto {

    private $ingredientes;

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
		$comidaDAO->read($this);
    }

    public function getIngredientes() {
        return $this->ingredientes;
    }
    public function setIngredientes($ingredientes) {
        $this->ingredientes = $ingredientes;
    }

    public function getFornecedor() {
        return null;
    }
    public function setFornecedor($fornecedor) {
        return null;
    }
}
?>