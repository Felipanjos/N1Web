<?php 

require_once "Conexao.php";

class ResponsavelDAO {

    public function create($item) {
        try {
            //Inserir na tabela usuário
            $conexaoUsuario = Conexao::getConexao();
            $sql = $conexaoUsuario->prepare("INSERT INTO fast_cantinas.usuario (login, senha, tipo) values (:login, :senha, :tipo)");
            
            $sql->bindParam("login", $login);
            $sql->bindParam("senha", $senha);
            $sql->bindParam("tipo", $tipo);

            $senha = $item->getSenha();
            $login = $item->getLogin();
            $tipo = $item->getTipo();

            $sql->execute();
            $usuario = $conexaoUsuario->lastInsertId();
            $conexaoUsuario = null;

            //Inserir na tabela pessoa usando o id do usuário inserido
            $conexaoPessoa = Conexao::getConexao();
            $sql = $conexaoPessoa->prepare("INSERT INTO fast_cantinas.pessoa
                                        (nome, telefone, email, idusuario) values (:nome, :telefone, :email, :usuario)");
            $sql->bindParam("nome", $nome);
            $sql->bindParam("telefone", $telefone);
            $sql->bindParam("email", $email);
            $sql->bindParam("usuario", $usuario);

            $nome = $item->getNome();
            $telefone = $item->getTelefone();
            $email = $item->getEmail();

            $sql->execute();
            $pessoa = $conexaoPessoa->lastInsertId();
            $conexaoPessoa = null;

            //Inserir na tabela responsavel usando o id da pessoa inserida
            $conexaoResponsavel = Conexao::getConexao();
            $sql = $conexaoResponsavel->prepare("INSERT INTO fast_cantinas.responsavel (cpf, idpessoa) values (:cpf, :pessoa)");
            $sql->bindParam("cpf", $cpf);
            $sql->bindParam("pessoa", $pessoa);

            $cpf = $item->getCpf();

            $sql->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function readAll() {
        try {
            $db = "fast_cantinas";
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("SELECT r.id, p.nome, r.cpf, p.email, p.telefone, u.login FROM $db.pessoa p 
                                            JOIN $db.responsavel r on r.idpessoa = p.id 
                                                JOIN $db.usuario u on p.idusuario = u.id");
            
            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);

            $lista = array();
            $i = 0;

            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
                $adulto = new Responsavel();
                $adulto->setId($linha['id']);
                $adulto->setNome($linha['nome']);
                $adulto->setCpf($linha['cpf']);
                $adulto->setEmail($linha['email']);
                $adulto->setTelefone($linha['telefone']);
                $adulto->setLogin($linha['login']);
                $lista[$i] = $adulto;
                $i++;
            }
            return $lista;
        } catch (PDOException $e) {
            return array();
        }
    }

    public function read($responsavel) {
        $db = "fast_cantinas";
        try {
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("SELECT r.id, p.nome, r.cpf, p.email, p.telefone, u.login, u.senha FROM $db.pessoa p 
                                        JOIN $db.responsavel r on r.idpessoa = p.id 
                                            JOIN $db.usuario u on p.idusuario = u.id
                                                WHERE r.id = :id");
            $sql->bindParam("id", $id);
            $id = $responsavel->getId();

            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);

            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
                $responsavel->setId($linha['id']);
                $responsavel->setNome($linha['nome']);
                $responsavel->setCpf($linha['cpf']);
                $responsavel->setEmail($linha['email']);
                $responsavel->setTelefone($linha['telefone']);
                $responsavel->setLogin($linha['login']);
                $responsavel->setSenha($linha['senha']);
            }
        } catch(PDOException $e) {
            $e->getMessage();
        }
    }

    public function update($responsavel) {
        $db = "fast_cantinas";
        try {
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("update $db.responsavel r 
                                        JOIN $db.pessoa p on r.idpessoa = p.id 
                                            JOIN $db.usuario u on p.idusuario = u.id
                                                set $db.p.nome = :nome, $db.p.email = :email, $db.p.telefone = :telefone, 
                                                    $db.u.login = :login, $db.r.cpf = :cpf, $db.u.senha = :senha
                                                        WHERE $db.r.id = :id;");
            
            $sql->bindParam("id", $id);
            $sql->bindParam("nome", $nome);
            $sql->bindParam("cpf", $cpf);
            $sql->bindParam("email", $email);
            $sql->bindParam("telefone", $telefone);
            $sql->bindParam("login", $login);
            $sql->bindParam("senha", $senha);
            
            $id = $responsavel->getId();
            $nome = $responsavel->getNome();
            $cpf = $responsavel->getCpf();
            $email = $responsavel->getEmail();
            $telefone = $responsavel->getTelefone();
            $login = $responsavel->getLogin();
            $senha= $responsavel->getSenha();  
            
            $sql->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function delete($id) {
        try {
            $db = "fast_cantinas";
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("DELETE r, p, u 
                                        FROM $db.responsavel AS r
                                            JOIN $db.pessoa AS p ON r.idpessoa = p.id
                                                JOIN $db.usuario AS u ON p.idusuario = u.id
                                                    WHERE r.id = :id");
            $sql->bindParam("id", $id);
            $sql->execute();  
        }  catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>