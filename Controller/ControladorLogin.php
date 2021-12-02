<?php 

require_once "Model/UsuarioDAO.php";
require_once "Controller/Controlador.php";

class ControladorLogin implements Controlador {
    
    private $usuario;
    private $usuarioBanco;

    public function __construct() {
        $this->usuario = new Usuario();
        $this->usuarioBanco = new Usuario();
    }

    public function processaRequisicao() {
        if (isset($_POST['login']) && isset($_POST['senha'])) {
            $this->usuario->setLogin($_POST['login']);
            $this->usuario->setSenha($_POST['senha']);
            $this->usuarioBanco->setLogin($_POST['login']);
            $this->usuarioBanco->read();            
            
            $senhaDigitada = $this->usuario->getSenha();
            $senhaBanco = $this->usuarioBanco->getSenha();

            $_SESSION['login'] = $this->usuario->getLogin();
            $_SESSION['senha'] = $this->usuario->getSenha();

            if ($senhaDigitada === $senhaBanco) {
                $this->usuario->setTipo($this->usuarioBanco->getTipo());
                $target = $this->usuario->getPage(); 
                header("Location:$target", true, 302);
            } else {
                require "View/login.php";
                echo "<script>alert('Usuário/senha inválidos ou não cadastrados');</script>";
            }
        } 
    }
}
?>