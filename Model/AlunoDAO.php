<?php 

require_once "Responsavel.php";
require_once "Aluno.php";


class AlunoDAO {

    public function create($aluno) {
        try {
            //Inserir na tabela usuário
            $db = "fast_cantinas";
            $conexaoUsuario = Conexao::getConexao();
            $sql = $conexaoUsuario->prepare("INSERT INTO $db.usuario (login, senha, tipo) values (:login, :senha, :tipo)");
            
            $sql->bindParam("login", $login);
            $sql->bindParam("senha", $senha);
            $sql->bindParam("tipo", $tipo);

            $senha = $aluno->getSenha();
            $login = $aluno->getLogin();
            $tipo = $aluno->getTipo();

            $sql->execute();
            $usuario = $conexaoUsuario->lastInsertId();

            //Inserir na tabela pessoa usando o id do usuário inserido
            $conexaoPessoa = Conexao::getConexao();
            $sql = $conexaoPessoa->prepare("INSERT INTO $db.pessoa
                                        (nome, telefone, email, idusuario) values (:nome, :telefone, :email, :usuario)");
            $sql->bindParam("nome", $nome);
            $sql->bindParam("telefone", $telefone);
            $sql->bindParam("email", $email);
            $sql->bindParam("usuario", $usuario);

            $nome = $aluno->getNome();
            $telefone = $aluno->getTelefone();
            $email = $aluno->getEmail();

            $sql->execute();
            $pessoa = $conexaoPessoa->lastInsertId();

            //Inserir na tabela responsavel usando o id da pessoa inserida
            $conexaoAluno = Conexao::getConexao();
            $sql = $conexaoAluno->prepare("INSERT INTO $db.aluno (matricula, turma, turno, saldo, idpessoa, idresponsavel) 
                                            VALUES (:matricula, :turma, :turno, :saldo, :idpessoa, :idresponsavel);");
            $sql->bindParam("matricula", $matricula);
            $sql->bindParam("turma", $turma);
            $sql->bindParam("turno", $turno);
            $sql->bindParam("saldo", $saldo);
            $sql->bindParam("idpessoa", $pessoa);
            $sql->bindParam("idresponsavel", $idresponsavel);

            $matricula = $aluno->getMatricula();
            $turma = $aluno->getTurma();
            $turno = $aluno->getTurno();
            $saldo = $aluno->getPai()->getFilhos()[0]->getSaldo();
            $idresponsavel = $aluno->getPai()->getId();

            $sql->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function read($aluno) {
        try {
            $conexao = Conexao::getConexao();
            $db = "fast_cantinas";
            $sql = $conexao->prepare("SELECT a.id, a.saldo, a.turno, a.turma, a.matricula, a.idresponsavel, p.nome, p.telefone, p.email, u.senha, u.login FROM $db.aluno AS a 
                                        JOIN $db.pessoa AS p ON a.idpessoa = p.id
                                            JOIN $db.usuario AS u ON p.idusuario = u.id
                                                JOIN $db.responsavel AS r ON a.idresponsavel = r.id
                                                    WHERE u.login = :login;");
            $sql->bindParam("login", $login);

            $login = $aluno->getLogin();
            
            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC) ;

            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
                $aluno->setId($linha['id']);
                $aluno->setSaldo($linha['saldo']);
                $aluno->setTurno($linha['turno']);
                $aluno->setTurma($linha['turma']);
                $aluno->setMatricula($linha['matricula']);
                $aluno->setPai($linha['idresponsavel']);
                $aluno->setNome($linha['nome']);
                $aluno->setTelefone($linha['telefone']);
                $aluno->setEmail($linha['email']);
                $aluno->setSenha($linha['senha']);
                $aluno->setLogin($linha['login']);
            }
            
            $idPai = $aluno->getPai();

            $conexao = null;
            $conexaoPai = Conexao::getConexao();
            $sql = $conexaoPai->prepare("SELECT p.nome, r.id FROM $db.responsavel AS r 
                                            JOIN $db.aluno AS a ON a.idresponsavel = r.id
                                                JOIN $db.pessoa AS p on r.idpessoa = p.id
                                                    WHERE a.idresponsavel = :idPai");
            $sql->bindParam("idPai", $idPai);

            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC) ;

            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
                $responsavel = new Responsavel();
                $responsavel->setNome($linha['nome']);
                $responsavel->setId($linha['id']);
            }

            $aluno->setPai($responsavel);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function pagar($aluno, $compra) {
        try {
            $db = 'fast_cantinas';
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("UPDATE $db.aluno SET saldo = :saldo WHERE id = :id;");

            $sql->bindParam("saldo", $saldo);
            $sql->bindParam("id", $id);

            $saldo = $aluno->getSaldo();
            $id = $aluno->getId();

            $sql->execute();

            $conexaoCompra = Conexao::getConexao();
            $sql = $conexaoCompra->prepare("INSERT INTO $db.compra (data, lista, total, idaluno) values ((SELECT NOW()), :lista, :total, :idaluno)");

            $sql->bindParam("lista", $lista);
            $sql->bindParam("total", $total);
            $sql->bindParam("idaluno", $id);

            $lista = $compra->getProdutos();
            $total = $compra->getTotal();

            $sql->execute();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function update($aluno) {
        $db = "fast_cantinas";
        try {
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("UPDATE $db.aluno a
                                        JOIN $db.pessoa p ON a.idpessoa = p.id 
                                            JOIN $db.usuario u ON p.idusuario = u.id
                                                SET u.login = :login, p.email = :email, p.telefone = :telefone, u.senha = :senha
                                                        WHERE a.id = :id;");
            
            $sql->bindParam("id", $id);
            $sql->bindParam("email", $email);
            $sql->bindParam("telefone", $telefone);
            $sql->bindParam("login", $login);
            $sql->bindParam("senha", $senha);
            
            $id = $aluno->getId();
            $email = $aluno->getEmail();
            $telefone = $aluno->getTelefone();
            $login = $aluno->getLogin();
            $senha= $aluno->getSenha();  
            
            $sql->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function delete($aluno) {
        try {
            $db = "fast_cantinas";
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("DELETE a, p, u 
                                        FROM $db.aluno AS a
                                            JOIN $db.pessoa AS p ON a.idpessoa = p.id
                                                JOIN $db.usuario AS u ON p.idusuario = u.id
                                                    WHERE a.id = :id");
            $sql->bindParam("id", $id);
            $id = $aluno->getId();
            $sql->execute();  
        }  catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>