<?php 

require "UsuarioDAO.php";

class Usuario {

    private $login;
    private $senha;
    private $tipo;

    public function findUser() {
        $usuarioDAO = new UsuarioDAO();
        $usuarioDAO->read($this);
    }

    public function getPage() {
        switch ($this->getTipo()) {
            case "responsavel":
                return 'responsavel.php';
                break;
            case "aluno":
                return 'aluno.php';
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