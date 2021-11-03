<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Aba do Responsável</title>
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

    <header id="headerResponsavel"></header>

    <body>
    <div class="wrapper">

        <div class="container" id="opcoesResponsavel">
            <div class="container-fluid bg-3 text-center" style="margin-top: 50px; margin-bottom: 50px;">
                <div class="btn-group">
                    <button type="button" id="btnAlunos" class="btn btn-primary">Alunos</button>
                    <button type="button" id="btnPagamentos" class="btn btn-primary">Pagamentos</button>
                    <button type="button" id="btnConfig" class="btn btn-primary">Configurações</button>
                </div>
            </div>  

            <div id="alunos" class="formulario">
                <div class="childBar text-center">
                    <h2>Saldo atual: 30,00</h2><br>

                    <input type="radio" class="btn-check" name="options" id="btnAluno1" autocomplete="off">
                    <label class="btn btn-secondary" for="btnAluno1">Juninho</label>
                    <a href="cadastroAluno.html" target="_blank" class="btn btn-default addItem" id="responsavelAdicionarAluno" style="margin-bottom: 8px; color: white;"><i class="fa fa-plus"></i> Adicionar</a>
                </div>

                <div id="aluno1">

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

                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default changeItem" id="alterarDadosAluno"><i class="fas fa-cog"></i> Alterar dados</button>
                        <button type="submit" class="btn btn-default blockItem"><i class="fa fa-ban"></i> Bloquear aluno</button>
                    </div>

                    <div id="formControleAlterarAluno">
                        <br>
                        <h2 style="margin-top: 15px;">Alterar dados</h2>
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="novoEmailAluno">E-mail:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="novoEmailAluno" placeholder="Novo email" name="novoEmailAluno" required>
                                    <small id="emailTexto" class="form-text text-muted">Seu email não será compartilhado.</small>
                                </div>
                            </div>
                        </div>
        
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="novoTelefoneAluno">Telefone:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="novoTelefoneAluno" placeholder="Ex.: (71) 00000-0000" name="novoTelefoneAluno" required>
                                </div>
                            </div>
                        </div>
            
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="novaSenhaAluno">Nova senha:</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="novaSenhaAluno" placeholder="**********" name="novaSenhaAluno" required>
                                    <small class="form-text text-muted">Lembre-se de não compartilhar sua senha!</small>
                                </div>
                            </div>
                        </div>
            
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="confNovaSenhaAluno">Confirme a senha:</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="confNovaSenhaAluno" placeholder="**********" name="confNovaSenhaAluno" required>
                                </div>
                            </div>
                        </div>
        
                        <div class="form-group">        
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default addItem" id="confirmarAlterarDadosAluno"><i class="fa fa-check"></i> Confirmar</button>
                                <button type="submit" class="btn btn-default blockItem" id="collapse"><i class="fa fa-times"></i> Fechar menu</button>
                            </div>
                        </div>
                    </div>

                    <div class="productBlock">
                        <br><br><h2>Bloquear produtos</h2>
                        <div class="container-fluid bg-3 text-center" style="margin-top: 50px; margin-bottom: 50px;">
                            <div class="container">
                                <div class="btn-group" style="margin-bottom: 30px;">
                                    <button type="button" id="btnlanches" class="btn btn-primary">Lanches</button>
                                    <button type="button" id="btnbebidas" class="btn btn-primary">Bebidas</button>
                                    <button type="button" id="btndoces" class="btn btn-primary">Doces</button>
                                    <button type="button" id="btnalmoco" class="btn btn-primary">Almoço</button>
                                    <button type="button" id="btnmenu" class="btn blockItem">Fechar</button>
                                </div>
                        
                                <div id="lanches" class="formulario">
                                    <div class="container-fluid bg-3 text-center">
                                        <h1>Lanches</h1><br>
                                        <div class="row">
                                            <!-- <div class="col-sm-4 item">
                                                <h3>R$ 4,00</h3>
                                                <img src="img/coxinha.jpg" height="300" width="300">
                                                <h4>Coxinha de Frango</h4>
                                            </div> -->
                        
                                            <div class="col-sm-4 item">
                                                <h3>R$ 3,29</h3>
                                                <img src="img/oreo.jpg" height="300" width="250">
                                                <h4>Biscoito Oreo</h4>
                                            </div>
                        
                                            <div class="col-sm-4 item">
                                                <h3>R$ 3,50</h3>
                                                <img src="img/saladedefruta.jpg" height="300" width="250">
                                                <h4>Salada de frutas</h4>
                                            </div>
                                        </div>
                        
                                        <hr style="height:2px;border-width:0;color:gray;background-color:rgba(138, 135, 135, 0.658)">
                        
                                        <div class="row">
                        
                                            <div class="col-sm-4 item">
                                                <h3>R$ 1,49</h3>
                                                <img src="img/maça.jpg" height="300" width="300">
                                                <h4>Maça</h4>
                                            </div>
                        
                                            <div class="col-sm-4 item">
                                                <h3>R$ 4,00</h3>
                                                <img src="img/pasteldeforno.jpg" height="300" width="250">
                                                <h4>Pastel de forno</h4>
                                            </div>
                        
                                            <div class="col-sm-4 item">
                                                <h3>R$ 1,30</h3>
                                                <img src="img/misto quente.jfif" height="300" width="250">
                                                <h4>Misto quente</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                        
                                <div id="bebidas" class="formulario">
                                    <div class="container-fluid bg-3 text-center">
                                        <h1>Bebidas</h1><br>
                                        <div class="row">
                                            <div class="col-sm-4 item">
                                                <h3>R$ 4,00</h3>
                                                <img src="img/sucomaracuja.jpg" height="300" width="250">
                                                <h4>Suco de Maracuja 330ml</h4>
                                            </div>
                        
                                            <div class="col-sm-4 item">
                                                <h3>R$ 4,00</h3>
                                                <img src="img/sucodeuva.jfif" height="300" width="250">
                                                <h4>Suco de uva 330ml</h4>
                                            </div>
                        
                                            <div class="col-sm-4 item">
                                                <h3>R$ 2,50</h3>
                                                <img src="img/nescau.webp" height="300" width="250">
                                                <h4>Nescau 200ml</h4>
                                            </div>
                                        </div>
                        
                                        <hr style="height:2px;border-width:0;color:gray;background-color:rgba(138, 135, 135, 0.658)">
                        
                                        <div class="row">
                                            <div class="col-sm-4 item">
                                                <h3>R$ 2,00</h3>
                                                <img src="img/agua.jpg" height="300" width="300">
                                                <h4>Água mineral 500ml</h4>
                                                <div class="btns">
                                                </div>
                                            </div>
                        
                                            <!-- <div class="col-sm-4 item">
                                                <h3>R$ 3,50</h3>
                                                <img src="img/coca cola lata.jpg" height="300" width="250">
                                                <h4>Coca Cola 350ml</h4>
                                            </div> -->
                        
                                            <div class="col-sm-4 item">
                                                <h3>R$ 3,50</h3>
                                                <img src="img/guarana.jpg" height="300" width="250">
                                                <h4>Guaraná Antartica 350ml</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                                
                                <div id="doces" class="formulario">
                                    <div class="container-fluid bg-3 text-center">
                                        <h1>Doces</h1><br>
                                        <div class="row">
                                            <div class="col-sm-4 item">
                                
                                                <h3>R$ 2,50</h3>
                                                <img src="img/doce1.jpg" height="300" width="300">
                                                <h4>Snickers barrinha</h4>
                                            </div>
                        
                                            <div class="col-sm-4 item">
                                                
                                                <h3>R$ 2,00</h3>
                                                <img src="img/doce2.jpg" height="300" width="250">
                                                <h4>Trident</h4>
                                            </div>
                        
                                            <!-- <div class="col-sm-4 item">
                                                <h3>R$ 0,10</h3>
                                                <img src="img/bala.jpg" height="300" width="250">
                                                <h4>Bala de maçã</h4>
                                            </div> -->
                                        </div>
                        
                                        <hr style="height:2px;border-width:0;color:gray;background-color:rgba(138, 135, 135, 0.658)">
                        
                                        <div class="row">
                                            <div class="col-sm-4 item">
                                        
                                                <h3>R$ 1,50</h3>
                                                <img src="img/doce3.jpg" height="300" width="300">
                                                <h4>Stars chocolate</h4>
                                            </div>
                        
                                            <div class="col-sm-4 item">
                                                <h3>R$ 1,00</h3>
                                                <img src="img/doce4.jpg" height="300" width="250">
                                                <h4>Halls</h4>
                                            </div>
                        
                                            <!-- <div class="col-sm-4 item">
                                                <h3>R$ 0,50</h3>
                                                <img src="img/pirulito.jpg" height="300" width="250">
                                                <h4>Pirulito Pop</h4>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                        
                                <div id="almoco" class="formulario">
                                    <div class="container-fluid bg-3 text-center">
                                        <h1>Bebidas</h1><br>
                                        <div class="row">
                                            <div class="col-sm-4 item">
                                                <h3>R$ 10</h3>
                                                <img src="img/prato1.jpg" height="300" width="300">
                                                <h4>Arroz + Feijão + Carne ou Frango</h4>
                                            </div>
                        
                                            <div class="col-sm-4 item">
                                                
                                                <h3>R$ 8,00</h3>
                                                <img src="img/prato2.jpg" height="300" width="250">
                                                <h4>Arroz + Strogonoff de frango</h4>
                                            </div>
                        
                                            <div class="col-sm-4 item">
                                                
                                                <h3>R$ 8</h3>
                                                <img src="img/prato3.jpg" height="300" width="250">
                                                <h4>Macarrão + Carne moída</h4>
                                            </div>
                                        </div>
                        
                                        <hr style="height:2px;border-width:0;color:gray;background-color:rgba(138, 135, 135, 0.658)">
                                    </div>    
                                </div>
                            </div>
                        </div>    
                    </div>

                    <div class="blockedProducts">
                        <br><h2>Produtos bloqueados</h2>
                        <div class="container-fluid bg-3 text-center" style="margin-top: 50px; margin-bottom: 50px;">
                            <div class="container-fluid bg-3 text-center">
                                <div class="row">
                                    <div class="col-sm-4 itemBloqueado">
                                        <h3>R$ 3,50</h3>
                                        <img src="img/coca cola lata.jpg" height="300" width="250">
                                        <h4>Coca Cola 350ml</h4>
                                    </div>

                                    <div class="col-sm- itemBloqueado">
                                        <h3>R$ 0,10</h3>
                                        <img src="img/bala.jpg" height="300" width="250">
                                        <h4>Bala de maçã</h4>
                                    </div>

                                    <div class="col-sm-4 itemBloqueado">
                                        <h3>R$ 4,00</h3>
                                        <img src="img/coxinha.jpg" height="300" width="300">
                                        <h4>Coxinha de Frango</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <br><h2>Histórico de alimentação</h2>

                        <div class="btn-group" style="margin-bottom: 40px; margin-top: 20px;">
                            <input class="form-control" id="end" type="date" value="2021-05-09">
                            <span style="margin-left: 10px; margin-right: 10px;">até</span>
                            <input class="form-control" id="start" type="date" value="2021-12-09">
                        </div>

                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Item</th>
                          <th>Valor</th>
                          <th>Quantidade</th>
                          <th>Data</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Pastel de forno</td>
                          <td>4,00</td>
                          <td>1</td>
                          <td>10/09/2021</td>
                          <td>4,00</td>
                        </tr>
                        <tr>
                            <td>Suco de maracujá</td>
                            <td>4,00</td>
                            <td>1</td>
                            <td>10/09/2021</td>
                            <td>4,00</td>
                        </tr>
                      </tbody>
                    </table>
                    <br>
                </div>

            </div>

            <div id="pagamentos" class="formulario">
                
                <div class="bar">
                    <h2>Saldo atual: 30,00</h2><br>
                
                    <h2>Forma de pagamento</h2><br>
                
                    <input type="radio" class="btn-check" name="options" id="btnPix" autocomplete="off">
                    <label class="btn btn-secondary" for="btnPix"><img src="img/pix.jpg" alt="" style="width: 80px;"></label>
                    <br>
                    <input type="radio" class="btn-check" name="options" id="btnCartao" autocomplete="off">
                    <label class="btn btn-secondary" for="btnCartao">Cartão de crédito/débito</label>
                </div>

                <div id="pix">
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="valor">Valor</label>
                                <input class="form-control" id="valorPix" type="text" placeholder="Ex.: 50,00">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="valor">CPF</label>
                                <input class="form-control" id="cpf" type="text" placeholder="Ex.: 000.000.000-00">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn addItem" id="cadastrar"><i class="fas fa-money-bill"></i> Gerar pagamento</button>
                        </div>
                    </div>
                </div>

                <div id="cartao">
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="valor">Valor</label>
                                <input class="form-control" id="valorCartao" type="text" placeholder="Ex.: 50,00">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group'">
                                <label for="valor">Número do cartão</label>
                                <input class="form-control" id="numCartao" type="text" placeholder="Ex.: 0000 0000 0000 0000">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group'">
                                <label for="valor">Nome como no cartão</label>
                                <input class="form-control" id="nomeCartao" type="text" placeholder="Ex.: Jorge Machado de Souza">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group'">
                                <label for="valor">Código de segurança</label>
                                <input class="form-control" id="cvvCartao" type="text" placeholder="Ex.: 000">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group'">
                                <label for="valor">Data de expiração</label>
                                <input class="form-control" id="dataCartao" type="date">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn addItem" id="cadastrar"><i class="fas fa-money-bill"></i> Pagar</button>
                        </div>
                    </div>
                </div>

                <div id="historico" class="formulario">
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
                </div>
            </div>

            <div id="config" class="formulario">

                <h2>Dados atuais</h2>
                <p>Para simples conferência.</p>            
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
                        <button type="submit" class="btn changeItem" id=""><i class="fa fa-cog"></i> Alterar</button>
                    </div>
                </div>
            </div>
        </div>

            <div class="push"></div>
    </div>

    <footer id="footer"></footer>

    </body>

    <script src="js/header.js"></script>
    <script src="js/footer.js"></script>
    <script src="js/responsavel.js"></script>
    <script src="js/pagamento.js"></script>
    <script src="js/formProdutos.js"></script>
    <script src="js/formResponsavel.js"></script>
</html>