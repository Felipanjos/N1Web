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

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 7af0367ed1725b3828f38a99f27419ac553e68bb
	public function create() {
		$produtoDAO = new ProdutoDAO();
		$produtoDAO->create($this);
	}
<<<<<<< HEAD

	public function read() {
		$produtoDAO = new ProdutoDAO();
		$produtoDAO->read($this);
	}

	public function readAll() {
		$produtoDAO = new ProdutoDAO();
		$produtoDAO->readAll();
=======

	public function read() {
		$produtoDAO = new ProdutoDAO();
		$produtoDAO->read();
>>>>>>> 7af0367ed1725b3828f38a99f27419ac553e68bb
	}
	
	public function update() {
		$produtoDAO = new ProdutoDAO();
		$produtoDAO->update($this);
	}
	
	public function delete() {
		$produtoDAO = new ProdutoDAO();
		$produtoDAO->delete($this);
	}
<<<<<<< HEAD
=======
=======
	public abstract function create();
	public abstract function read();
	public abstract function update();
	public abstract function delete();
>>>>>>> 2a16c76ae4d85cd76c7c2a40295e71bfc8f70876
>>>>>>> 7af0367ed1725b3828f38a99f27419ac553e68bb

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