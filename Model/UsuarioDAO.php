<?php 

require_once "Model/Usuario.php";
require_once "Conexao.php";

class UsuarioDAO {

    public static function read($login) {
        try {
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("SELECT * FROM fast_cantinas.usuario
                                        WHERE login = :login");
            $sql->bindParam("login", $login);

            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);

            while($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
                $user = new Usuario();
                $user->setLogin($linha['login']);
                $user->setSenha($linha['senha']);
                $user->setTipo($linha['tipo']);
            }
            return isset($user) ? $user : null;
        }  catch (PDOException $e) {
            // $e->getMessage();
        }
    }
}

?>