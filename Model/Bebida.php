<?php 

class Bebida extends Produto {

    private $fornecedor;

    public function __construct($codigo, $nome, $foto, $preco, $fornecedor){
        parent::__construct($codigo, $nome, $foto, $preco);
        parent::setTipo("Bebida");
        
        $this->fornecedor = $fornecedor;
    }

    public function incluir() : void {

        $conexao = parent::conectar();
        $sql = $conexao->prepare("insert");
    }
}
?>