<?php 

require_once "Model/ProdutoDAO.php";
require_once "Controller/Controlador.php";

class ControladorDeleteProduto implements Controlador {

    public function processaRequisicao() {
                
        ProdutoDAO::delete($_POST['id']);

        header('Location:readProduto', true, 302);
    }
}
?>