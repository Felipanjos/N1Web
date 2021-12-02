<?php 

require_once "ProdutoDAO.php";
require_once "Conexao.php";

class ComidaDAO extends ProdutoDAO {

    public function create($item) {
        try{
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("insert into 
                                        fast_cantinas.produto (codigo, nome, preco, categoria, tipo, ingredientes) 
                                            values (:codigo, :nome, :preco, :categoria, :tipo, :ingredientes)");
            $sql->bindParam("codigo", $codigo);
            $sql->bindParam("nome", $nome);
            $sql->bindParam("preco", $preco);
            $sql->bindParam("categoria", $categoria);
            $sql->bindParam("tipo", $tipo);
            $sql->bindParam("ingredientes", $ingredientes);
           
            $codigo = $item->getCodigo();
            $nome = $item->getNome();
            $preco = $item->getPreco();
            $categoria = $item->getCategoria();
            $tipo = $item->getTipo();
            $ingredientes = $item->getingredientes();
           
            $sql->execute();
         }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}
?>