<?php 

require "Model/Usuario.php";
require_once "Controller/Controlador.php";

class ControladorLogin implements Controlador {
    
    public function processaRequisicao() {
        if (isset($_POST['login']) && isset($_POST['senha'])) {
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
            
            $user = UsuarioDAO::read($login);

            if ($senha === $user->getSenha()) {
                $target = $user->getPage(); 
                header("Location:$target", true, 302);
            } else {
                // header("Location:login.php", true, 302);
                // $successLogin = false;
                require "View/login.php";
                echo "<script>alert('Usuário/senha inválidos ou não cadastrados');</script>";
            }
        }
    }
}
?>