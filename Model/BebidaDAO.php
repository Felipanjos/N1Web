<?php 

require_once "ProdutoDAO.php";

class BebidaDAO extends ProdutoDAO {

    public function create($item) {
        try{
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("INSERT INTO
                                        fast_cantinas.produto (codigo, nome, preco, categoria, tipo, fornecedor) 
                                            VALUES (:codigo, :nome, :preco, :categoria, :tipo, :fornecedor)");
            $sql->bindParam("codigo", $codigo);
            $sql->bindParam("nome", $nome);
            // $sql->bindParam("foto", $foto);
            $sql->bindParam("preco", $preco);
            $sql->bindParam("categoria", $categoria);
            $sql->bindParam("tipo", $tipo);
            $sql->bindParam("fornecedor", $fornecedor);
           
            $codigo = $item->getCodigo();
            $nome = $item->getNome();
            // $foto = $item->getFoto();
            $preco = $item->getPreco();
            $categoria = $item->getCategoria();
            $tipo = $item->getTipo();
            $fornecedor = $item->getFornecedor();
           
            $sql->execute();
         }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}
?>