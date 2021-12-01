<?php 

require_once "Model/Usuario.php";
require_once "Conexao.php";

class UsuarioDAO {

    public function read($usuario) {
        try {
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("SELECT * FROM fast_cantinas.usuario
                                        WHERE login = :login");
            $sql->bindParam("login", $login);

            $login = $usuario->getLogin();

            $sql->execute();

            while($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
                $usuario->setLogin($linha['login']);
                $usuario->setSenha($linha['senha']);
                $usuario->setTipo($linha['tipo']);
            }
        }  catch (PDOException $e) {
            $e->getMessage();
        }
    }
}

?>