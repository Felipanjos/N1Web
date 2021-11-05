<?php 

require_once "Conexao.php";

abstract class ProdutoDAO {

    public abstract function create($item);

    public abstract function delete($item);

    public function update($item) {

    }

    public function read($item) {
        
    }
}
?>