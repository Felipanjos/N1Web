<?php 

class DepositoDAO {

	public static function read($id) {
		try {
			$db = 'fast_cantinas'			;
			$conexao = Conexao::getConexao();
			$sql = $conexao->prepare("SELECT d.id, d.metodo, d.data, d.valor, d.idaluno 
										FROM $db.deposito AS d 
											JOIN $db.aluno AS a
												ON d.idaluno = a.id
													WHERE a.id = :id;");
			$sql->bindParam("id", $id);
			$sql->execute();

			$lista = array();
			$i = 0;
			
			while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
				$deposito = new Deposito();
					$deposito->setId($linha['id']);
					$deposito->setData($linha['data']);
					$deposito->setIdaluno($linha['idaluno']);
					$deposito->setValor($linha['valor']);
					$deposito->setMetodo($linha['metodo']);
				$depositos[$i] = $deposito;
				$i++;
            }
			return $depositos;
		}catch(PDOException $e){
			$e->getMessage();
       	}
	} 
}
?>