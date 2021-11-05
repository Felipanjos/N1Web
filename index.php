<?php
	if (isset($_GET['url'])) {
        $url = strtoupper($_GET['url']);
        $url = array_filter(explode('/', $url));
        // echo $url[1];

        switch ($url[1]){
            case "INCLUIRPRODUTO":
                require "Controller/ControladorFormIncluirProduto.php";
                $controlador = new ControladorFormIncluirProduto();
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
