<?php
    session_start();
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
            case "FORMUPDATEPRODUTO":
                require "Controller/ControladorFormUpdateProduto.php";
                $controlador = new ControladorFormUpdateProduto();
                $controlador->processaRequisicao();
                break;
            case "UPDATEPRODUTO":
                require "Controller/ControladorUpdateProduto.php";
                $controlador = new ControladorUpdateProduto();
                $controlador->processaRequisicao();
                break;
            case "DELETEPRODUTO":
                require "Controller/ControladorDeleteProduto.php";
                $controlador = new ControladorDeleteProduto();
                $controlador->processaRequisicao();
                break;
            case "LOGIN":
                require "Controller/ControladorLogin.php";
                $controlador = new ControladorLogin();
                $controlador->processaRequisicao();
                break;
            case "READRESPONSAVEL":
                require "Controller/ControladorReadResponsavel.php";
                $controlador = new ControladorReadResponsavel();
                $controlador->processaRequisicao();
                break;
            case "FORMUPDATERESPONSAVEL":
                require "Controller/ControladorFormUpdateResponsavel.php";
                $controlador = new ControladorFormUpdateResponsavel();
                $controlador->processaRequisicao();
                break;
            case "UPDATERESPONSAVEL":
                require "Controller/ControladorUpdateResponsavel.php";
                $controlador = new ControladorUpdateResponsavel();
                $controlador->processaRequisicao();
                break;
            case "DELETERESPONSAVEL":
                require "Controller/ControladorDeleteResponsavel.php";
                $controlador = new ControladorDeleteResponsavel();
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
