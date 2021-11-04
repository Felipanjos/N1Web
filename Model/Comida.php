<?php 

class Bebida extends Produto {
    
    private $fornecedor;
    private $ingredientes;
    
    public function __construct($codigo, $nome, $foto, $preco, $fornecedor){
        parent::__construct($codigo, $nome, $foto, $preco);
        parent::setTipo("Bebida");
        
        $this->fornecedor = $fornecedor;
    }


}
?>