<?php 

require_once "ProdutoDAO.php";

class ComidaDAO extends ProdutoDAO {

    public function create($item) {
        try{
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("insert into 
                                        fast_cantinas.produto (codigo, nome, preco, categoria, tipo, ingredientes) 
                                            values (:codigo, :nome, :preco, :categoria, :tipo, :ingredientes)");
            $sql->bindParam("codigo", $codigo);
            $sql->bindParam("nome", $nome);
            // $sql->bindParam("foto", $foto);
            $sql->bindParam("preco", $preco);
            $sql->bindParam("categoria", $categoria);
            $sql->bindParam("tipo", $tipo);
            $sql->bindParam("ingredientes", $ingredientes);
           
            $codigo = $item->getCodigo();
            $nome = $item->getNome();
            // $foto = $item->getFoto();
            $preco = $item->getPreco();
            $categoria = $item->getCategoria();
            $tipo = $item->getTipo();
            $ingredientes = $item->getingredientes();
           
            $sql->execute();
         }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function delete($item) {
        try {
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("delete from fast_cantinas.produto where codigo = :codigo");

            $sql->bindParam("codigo", $codigo);
            $codigo = $item->getCodigo();
            
            $sql->execute();
        }  catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function update($item) {

    }

    public function read($item) {
        
    }
}
?>