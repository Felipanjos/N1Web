<?php 

require_once "Conexao.php";

class ProdutoDAO {

    public function create($item) {
        try{
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("insert into 
                                        fast_cantinas.produto (codigo, nome, preco, categoria, tipo, ingredientes) 
                                            values (:codigo, :nome, :preco, :categoria, :tipo, :fornecedor, :ingredientes)");
            $sql->bindParam("codigo", $codigo);
            $sql->bindParam("nome", $nome);
            // $sql->bindParam("foto", $foto);
            $sql->bindParam("preco", $preco);
            $sql->bindParam("categoria", $categoria);
            $sql->bindParam("tipo", $tipo);
            $sql->bindParam("fornecedor", $fornecedor);
            $sql->bindParam("ingredientes", $ingredientes);
            
            $codigo = $item->getCodigo();
            $nome = $item->getNome();
            // $foto = $item->getFoto();
            $preco = $item->getPreco();
            $categoria = $item->getCategoria();
            $tipo = $item->getTipo();
            $fornecedor = $item->getFornecedor();
            $ingredientes = $item->getIngredientes();
            
            $sql->execute();
         }catch(PDOException $e){
             echo $e->getMessage();
            }
    }
    
    public static function readAll() {
        try {
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("SELECT * FROM fast_cantinas.produto");

            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);

            $lista = array();
            $i = 0;

            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
                $produto = new Produto();
                $produto->setCodigo($linha['codigo']);
                $produto->setNome($linha['nome']);
                // $produto->setFoto[$linha['foto']];
                $produto->setPreco($linha['preco']);
                $produto->setCategoria($linha['categoria']);
                $produto->setTipo($linha['tipo']);
                $produto->setFornecedor($linha['fornecedor']);
                $produto->setIngredientes($linha['ingredientes']);
                $lista[$i] = $produto; 
                $i++;
            }
            return $lista;
        } catch (PDOException $e) {
            return array();
        }
    }

    public function read($produto) {
        try{
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("select * from fast_cantinas.produto where codigo = :codigo");
            $sql->bindParam("codigo",$codigo);
            $codigo = $produto->getCodigo();
                
            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
           
            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
                $produto->setNome($linha['nome']);
                // $produto->setFoto[$linha['foto']];
                $produto->setPreco($linha['preco']);
                $produto->setCategoria($linha['categoria']);
                $produto->setTipo($linha['tipo']);
                $produto->setFornecedor($linha['fornecedor']);
                $produto->setIngredientes($linha['ingredientes']);
            }
       }
       catch(PDOException $e){
            $e->getMessage();
       }
    }

    public static function update($item) {
        try {
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("update fast_cantinas.produto 
                                        set nome = :nome, preco = :preco, categoria = :categoria, fornecedor = :fornecedor, ingredientes = :ingredientes
                                            where codigo = :codigo");

            $sql->bindParam("codigo", $codigo);
            $sql->bindParam("nome", $nome);
            // $sql->bindParam("foto", $foto);
            $sql->bindParam("preco", $preco);
            $sql->bindParam("categoria", $categoria);
            $sql->bindParam("fornecedor", $fornecedor);
            $sql->bindParam("ingredientes", $ingredientes);
            
            $codigo = $item->getCodigo();
            $nome = $item->getNome();
            // $foto = $item->getFoto();
            $preco = $item->getPreco();
            $categoria = $item->getCategoria();
            $fornecedor = $item->getFornecedor();
            $ingredientes = $item->getIngredientes();

            $sql->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

    public static function delete($produto) {
        try {
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("delete from fast_cantinas.produto where codigo = :codigo");
            $sql->bindParam("codigo", $codigo);
            $codigo = $produto->getCodigo();

            $sql->execute();
        }  catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>