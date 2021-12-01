<?php 

require_once "UsuarioDAO.php";

class Usuario {

    private $login;
    private $senha;
    private $tipo;

    public function read() {
        $usuarioDAO = new UsuarioDAO();
        $usuarioDAO->read($this);
    }

    public function getPage() {
        switch ($this->getTipo()) {
            case "responsavel":
                return 'inicioResponsavel';
                break;
            case "aluno":
                return 'inicioAluno';
                break;
            case "funcionario":
                return 'readProduto';
                break;
        }
    }

    public function getLogin() {
        return $this->login;
    }
    
    public function setLogin($login) {
        $this->login = $login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }
}

?>