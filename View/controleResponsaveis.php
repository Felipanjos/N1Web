<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <title>Controle de responsáveis</title>
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

        <script>
            $(document).ready(function(){

                $("#formControleAlterarResp").hide();

                $("#alterarDados").click(function(){
                    $("#formControleAlterarResp").show();
                });
                $("#collapse").click(function(){
                    $("#formControleAlterarResp").hide();
                });
            })
        </script>

    </head>

<header id="headerFuncionario"></header>

<body>
    <div class="wrapper">
        <div class="container">
            <br><br><div class="col-sm-12">
                <div class="input-group">
                    <input type="search" class="form-control rounded" placeholder="Nome do responsável" aria-label="Search" aria-describedby="search-addon">
                    <button type="button" class="btn btn-outline-primary">Procurar</button>
                  </div>
            </div>

            <h2 style="margin-top: 40px;">Dados do responsável</h2>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Sobrenome</th>
                  <th>CPF</th>
                  <th>Email</th>
                  <th>Celular</th>
                  <th>Login</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>Jorge</td>
                    <td>Machado de Souza</td>
                    <td>025.797.265-00</td>
                    <td>machadojorge1980@gmail.com</td>
                    <td>(71) 98889-8313</td>
                    <td>jorgemachado21</td>
                </tr>
            </tbody>
        </table>

        <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default changeItem" id="alterarDados"><i class="fas fa-cog"></i> Alterar dados</button>
                <button type="submit" class="btn btn-default removeItem"><i class="fas fa-trash"></i> Remover responsável</button>
                </div>
            </div>
            
            <div id="formControleAlterarResp">
                <br>
                <h2>Alterar dados</h2>
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="novoEmailResp">E-mail:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="novoEmailResp" placeholder="Novo email" name="novoEmailResp" required>
                            <small id="emailTexto" class="form-text text-muted">Seu email não será compartilhado.</small>
                        </div>
                    </div>
                </div>

                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="novoTelelefoneResp">Telefone:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="novoTelelefoneResp" placeholder="Ex.: (71) 00000-0000" name="novoTelelefoneResp" required>
                        </div>
                    </div>
                </div>
    
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="novaSenhaResp">Nova senha:</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="novaSenhaResp" placeholder="**********" name="novaSenhaResp" required>
                            <small class="form-text text-muted">Lembre-se de não compartilhar sua senha!</small>
                        </div>
                    </div>
                </div>
    
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="confNovaSenha">Confirme a senha:</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="confNovaSenhaResp" placeholder="**********" name="confNovaSenhaResp" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default addItem"><i class="fa fa-check"></i> Confirmar</button>
                        <button type="submit" class="btn btn-default removeItem" id="collapse"><i class="fa fa-times"></i> Fechar menu</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="formulario">

        </div>

        <div class="push"></div>
    </div>

        <footer id="footer"></footer>
</body>


    <script src="js/footer.js"></script>
    <script src="js/header.js"></script>
    <script src="js/formProdutos.js"></script>
</html>