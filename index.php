<?php
	if (isset($_GET['url'])) {
        $url = strtoupper($_GET['url']);
        $url = array_filter(explode('/', $url));
        // echo $url[1];

        switch ($url[1]){
            case "CREATEPRODUTO":
                require "Controller/ControladorCreateProduto.php";
                $controlador = new ControladorFormCreateProduto();
                $controlador->processaRequisicao();
                break;
            case "READPRODUTO":
                require "Controller/ControladorReadProduto.php";
                $controlador = new ControladorReadProduto();
                $controlador->processaRequisicao();
                break;
            default:
                require "Controller/ControladorHome.php";
                $controlador = new ControladorHome();
                $controlador->processaRequisicao();
                break;
        }
    }
    else 
        echo "URL vazia. - erro 404";
?>
