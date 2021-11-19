<?php 

require_once "Conexao.php";

class ResponsavelDAO {

    public function create($item) {

    }

    public static function readAll() {
        try {
            $db = "fast_cantinas";
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("select r.id, p.nome, r.cpf, p.email, p.telefone, u.login from $db.pessoa p 
                                            join $db.responsavel r on r.idpessoa = p.id 
                                                join $db.usuario u on p.idusuario = u.id");
            
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
            $sql = $conexao->prepare("select r.id, p.nome, r.cpf, p.email, p.telefone, u.login, u.senha from $db.pessoa p 
                                        join $db.responsavel r on r.idpessoa = p.id 
                                            join $db.usuario u on p.idusuario = u.id
                                                where r.id = :id");
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
                                        join $db.pessoa p on r.idpessoa = p.id 
                                            join $db.usuario u on p.idusuario = u.id
                                                set $db.p.nome = :nome, $db.p.email = :email, $db.p.telefone = :telefone, 
                                                    $db.u.login = :login, $db.r.cpf = :cpf, $db.u.senha = :senha
                                                        where $db.r.id = :id;");
            
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
            $sql = $conexao->prepare("delete from $db.responsavel where id = :id");
            $sql->bindParam("id", $id);
            $sql->execute();

            $sql1 = $conexao->prepare("select p.id from $db.pessoa p join $db.responsavel r on p.id = r.idpessoa where r.id = :id");
            $sql1->bindParam("id", $id);
            $sql1->execute();

            $idPessoa = '';
            while ($linha = $sql1->fetch(PDO::FETCH_ASSOC)) {
                $idPessoa = $linha['id'];
            }

            $sql2 = $conexao->prepare("delete from $db.pessoa where id = :idPessoa");
            $sql2->bindParam("idPessoa", $idPessoa);
            $sql2->execute();      
            
            $sql3 = $conexao->prepare("select p.id from $db.pessoa p 
                                        join $db.responsavel r on p.id = r.idpessoa  
                                            join $db.usuario u on p.idusuario = u.id
                                                where r.id = :id");
            $sql3->bindParam("id", $id);
            $sql3->execute();

            $idUsuario = '';
            while ($linha = $sql3->fetch(PDO::FETCH_ASSOC)) {
                $idUsuario = $linha['id'];
            }

            $sql4 = $conexao->prepare("delete from $db.usuario where id = :idUsuario");
            $sql4->bindParam("idUsuario", $idUsuario);
            $sql4->execute();      
        }  catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

?>