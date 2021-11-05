<?php

class Conexao {
    public static function getConexao(){
        $servername = "localhost:3306"; 
        $username = "root";
        $password = "";
        $dbname = "fast_cantinas";

        try {
           $conexao = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
           $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           return $conexao;
        }
        catch(PDOException $e) {
            echo "entrou no catch".$e->getmessage();
            return null;
       }
    }
}
?>