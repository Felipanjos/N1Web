<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <title>Informações</title>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!-- Estilo customizado -->
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <link rel="icon" href="img/icon.png">
    </head>

<header id="headerAluno"></header>

<body>
    <div class="container wrapper">
        <br><h2>Dados</h2>
        <table class="table table-hover">
        <thead>
            <tr>
                <th>Matrícula</th>
                <th>Turma</th>
                <th>Turno</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Login</th>
                <th>Responsável</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $retorno->getMatricula(); ?></td>
                <td><?php echo $retorno->getTurma(); ?></td>
                <td><?php echo $retorno->getTurno(); ?></td>
                <td><?php echo $retorno->getNome(); ?></td>
                <td><?php echo $retorno->getTelefone(); ?></td>
                <td><?php echo $retorno->getEmail(); ?></td>
                <td><?php echo $_SESSION['login']; ?></td>
                <td><?php echo $retorno->getPai()->getNome(); ?></td>
            </tr>
        </tbody>
        </table>
        <br>

        <br><h2>Histórico de transações</h2>
        <table class="table table-hover">
        <thead>
            <tr>
            <th>Método de pagamento</th>
            <th>Valor</th>
            <th>Data</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>PIX</td>
            <td>200,00</td>
            <td>25/08/2021</td>
            </tr>
            <tr>
                <td>Cartão de débito</td>
                <td>150,00</td>
                <td>12/07/2021</td>
            </tr>
        </tbody>
        </table>
        <br>

        
        <div class="push"></div>
    </div>
        <footer id="footer"></footer>
</body>


    <script src="js/footer.js"></script>
    <script src="js/header.js"></script>
    <script src="js/formProdutos.js"></script>
</html>
