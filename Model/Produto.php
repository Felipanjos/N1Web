<?php 

class Produto {

    private $codigo; 
    private $nome; 
    private $preco; 
	private $categoria;
    private $tipo;
    private $fornecedor;
    private $ingredientes;
    // private $foto; 


	public function create() {
		$produtoDAO = new ProdutoDAO();
		$produtoDAO->create($this);
	}

	public function read() {
		$produtoDAO = new ProdutoDAO();
		$produtoDAO->read($this);
	}

	public function readAll() {
		$produtoDAO = new ProdutoDAO();
		$produtoDAO->readAll();
	}
	
	public function update() {
		$produtoDAO = new ProdutoDAO();
		$produtoDAO->update($this);
	}
	
	public function delete() {
		$produtoDAO = new ProdutoDAO();
		$produtoDAO->delete($this);
	}

    public function getCodigo(){
		return $this->codigo;
	}
	public function setCodigo($codigo){
		$this->codigo = $codigo;
	}
	public function getNome(){
		return $this->nome;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}
	// public function getFoto(){
	// 	return $this->foto;
	// }
	// public function setFoto($foto){
	// 	$this->foto = $foto;
	// }
	public function getPreco(){
		return $this->preco;
	}
	public function setPreco($preco){
		$this->preco = $preco;
	}
	public function getTipo(){
		return $this->tipo;
	}
	public function setTipo($tipo){
		$this->tipo = $tipo;
	}
	public function getCategoria(){
		return $this->categoria;
	}
	public function setCategoria($categoria){
		$this->categoria = $categoria;
	} 
	public function getIngredientes() {
        return $this->ingredientes;
    }
    public function setIngredientes($ingredientes) {
        $this->ingredientes = $ingredientes;
    }
    public function getFornecedor() {
        return $this->fornecedor;
    }
    public function setFornecedor($fornecedor) {
        $this->fornecedor = $fornecedor;
    }
}
?>