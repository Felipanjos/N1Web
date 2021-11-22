<?php
    session_start();
	if (isset($_GET['url'])) {
        $url = strtoupper($_GET['url']);
        $url = array_filter(explode('/', $url));
        // echo $url[1];

        switch ($url[1]){
            case "CREATEPRODUTO":
                require "Controller/Produto/ControladorCreateProduto.php";
                $controlador = new ControladorFormCreateProduto();
                $controlador->processaRequisicao();
                break;
            case "READPRODUTO":
                require "Controller/Produto/ControladorReadProduto.php";
                $controlador = new ControladorReadProduto();
                $controlador->processaRequisicao();
                break;
            case "FORMUPDATEPRODUTO":
                require "Controller/Produto/ControladorFormUpdateProduto.php";
                $controlador = new ControladorFormUpdateProduto();
                $controlador->processaRequisicao();
                break;
            case "UPDATEPRODUTO":
                require "Controller/Produto/ControladorUpdateProduto.php";
                $controlador = new ControladorUpdateProduto();
                $controlador->processaRequisicao();
                break;
            case "DELETEPRODUTO":
                require "Controller/Produto/ControladorDeleteProduto.php";
                $controlador = new ControladorDeleteProduto();
                $controlador->processaRequisicao();
                break;
            case "CREATERESPONSAVEL":
                require "Controller/Responsavel/ControladorCreateResponsavel.php";
                $controlador = new ControladorCreateResponsavel();
                $controlador->processaRequisicao();
                break;
            case "READRESPONSAVEL":
                require "Controller/Responsavel/ControladorReadResponsavel.php";
                $controlador = new ControladorReadResponsavel();
                $controlador->processaRequisicao();
                break;
            case "FORMUPDATERESPONSAVEL":
                require "Controller/Responsavel/ControladorFormUpdateResponsavel.php";
                $controlador = new ControladorFormUpdateResponsavel();
                $controlador->processaRequisicao();
                break;
            case "UPDATERESPONSAVEL":
                require "Controller/Responsavel/ControladorUpdateResponsavel.php";
                $controlador = new ControladorUpdateResponsavel();
                $controlador->processaRequisicao();
                break;
            case "DELETERESPONSAVEL":
                require "Controller/Responsavel/ControladorDeleteResponsavel.php";
                $controlador = new ControladorDeleteResponsavel();
                $controlador->processaRequisicao();
                break;
            case "INICIOALUNO":
                require "Controller/Aluno/ControladorInicioAluno.php";
                $controlador = new ControladorInicioAluno();
                $controlador->processaRequisicao();
                break;
            case "READALUNO":
                require "Controller/Aluno/ControladorReadAluno.php";
                $controlador = new ControladorReadAluno();
                $controlador->processaRequisicao();
                break;
            case "LOGIN":
                require "Controller/ControladorLogin.php";
                $controlador = new ControladorLogin();
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
