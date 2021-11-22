<?php 

require_once "Responsavel.php";
require_once "Aluno.php";


class AlunoDAO {

    public function create() {}

    public static function read($login) {
        try {
            $conexao = Conexao::getConexao();
            $db = "fast_cantinas";
            $sql = $conexao->prepare("SELECT a.id, a.saldo, a.turno, a.turma, a.matricula, a.idresponsavel, p.nome, p.telefone, p.email FROM $db.aluno AS a 
                                        JOIN $db.pessoa AS p ON a.idpessoa = p.id
                                            JOIN $db.usuario AS u ON p.idusuario = u.id
                                                JOIN $db.responsavel AS r ON a.idresponsavel = r.id
                                                    WHERE u.login = :login");
            $sql->bindParam("login", $login);
            
            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC) ;

            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
                $aluno = new Aluno();
                $aluno->setId($linha['id']);
                $aluno->setSaldo($linha['saldo']);
                $aluno->setTurno($linha['turno']);
                $aluno->setTurma($linha['turma']);
                $aluno->setMatricula($linha['matricula']);
                $aluno->setNome($linha['nome']);
                $aluno->setTelefone($linha['telefone']);
                $aluno->setEmail($linha['email']);
                $aluno->setPai($linha['idresponsavel']);
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

            return $aluno;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function readAll() {}

    public function update() {}

    public function delete() {}
}
?>