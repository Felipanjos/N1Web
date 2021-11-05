<?php 

abstract class Produto {

    private $codigo; 
    private $nome; 
    private $preco; 
	private $categoria;
    private $tipo;
    // private $foto; 

	public abstract function create();
	public abstract function read();
	public abstract function update();
	public abstract function delete();

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
	public abstract function setIngredientes($ingredientes);
	public abstract function getIngredientes();
	public abstract function setFornecedor($fornecedor);
	public abstract function getFornecedor();
}
?>