<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <title>Consultar aluno</title>
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

<header id="headerFuncionario"></header>

<body>
    <div class="wrapper">
        <div class="container" style="margin-bottom: 40px;">
            <br><br><div class="col-sm-12">
                <div class="input-group">
                    <input type="search" class="form-control rounded" placeholder="Matrícula do aluno" aria-label="Search" aria-describedby="search-addon">
                    <button type="button" class="btn btn-outline-primary">Procurar</button>
                  </div>
            </div>
   
            
            <h2 style="margin-top: 40px; margin-bottom: 10px;">Dados</h2>
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
                  <td>30008429</td>
                  <td>401A</td>
                  <td>Matutino</td>
                  <td>Junior Machado de Lima</td>
                  <td>(71) 98421-2890</td>
                  <td>juninhomachado@gmail.com</td>
                  <td>juninho</td>
                  <td>Jorge Machado de Souza</td>
                </tr>
              </tbody>
            </table>
            
            <br><h2>Saldo atual: 30,00</h2><br>
        </div>

        <div class="push"></div>
    </div>

        <footer id="footer"></footer>
</body>


    <script src="js/footer.js"></script>
    <script src="js/header.js"></script>
    <script src="js/formProdutos.js"></script>
</html>