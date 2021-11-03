<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Login</title>
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
    <style>
          h2 {
            color: rgb(11, 179, 62) ;
            text-align: center;
        }
        button{
            background-color: rgb(11, 179, 62);
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        button:hover{
            background-color: rgb(88, 248, 82);
            cursor: pointer;
        }
    </style>
      </head>

    <header id="headerHome"></header>

    <body class="body">
        <div class="wrapper">
            <div class="container">
                <br><br>
                <div class="div">
                    <h2 class="cor">Login</h2><br>

                    <form class="form-horizontal" id="formLogin">    
                        <div class="form-group">
                            <label class="control-label col-sm-2 cor" for="login" >Usuário:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="login" placeholder="Insira seu usuário" name="login" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-sm-2 cor" for="pwd">Senha:</label>
                            <div class="col-sm-10">          
                                <input type="password" class="form-control" id="pwd" placeholder="********" name="pwd" required>
                            </div>
                        </div>
                        
                        <div class="form-group">        
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                <label class="cor"><input type="checkbox" name="remember"> Lembrar credenciais</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">        
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Entrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="push"></div>
        </div>

        <footer id="footer"></footer>

    </body>

    <script src="js/header.js"></script>
    <script src="js/footer.js"></script>
    <script src="js/login.js"></script>
</html>