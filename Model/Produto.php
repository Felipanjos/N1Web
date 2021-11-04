<?php 

abstract class Produto {

    private $codigo; 
    private $nome; 
    private $foto; 
    private $preco; 
    private $situacao; 
    private $tipo;

    public function __construct($codigo, $nome, $foto, $preco) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->foto = $foto;
        $this->preco = $preco;
        $this->situacao = "Bloqueado";
    }

    public function bloquear() : void {
        $this->situacao = "Bloqueado";
    }

    public function desbloquear() : void {
        $this->situacao = "Desbloqueado";
    }

    public abstract function incluir() : void;

    public function conectar() {
        $servername = "localhost:3306"; 
        $username = "root";
        $password = "";
        $dbname = "fast_cantinas";

        try {
           $minhaConexao = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
           $minhaConexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           return $minhaConexao;
        }
        catch(PDOException $e) {
            echo "entrou no catch".$e->getmessage();
            return null;
       }
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
	public function getFoto(){
		return $this->foto;
	}
	public function setFoto($foto){
		$this->foto = $foto;
	}
	public function getIngredientes(){
		return $this->ingredientes;
	}
	public function setIngredientes($ingredientes){
		$this->ingredientes = $ingredientes;
	}
	public function getPreco(){
		return $this->preco;
	}
	public function setPreco($preco){
		$this->preco = $preco;
	}
	public function getSituacao(){
		return $this->situacao;
	}
	public function setSituacao($situacao){
		$this->situacao = $situacao;
	}
	public function getTipo(){
		return $this->tipo;
	}
	public function setTipo($tipo){
		$this->tipo = $tipo;
	}
}
?>