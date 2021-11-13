<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Carrinho</title>
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
            function somaProduto1(){
                var preco = parseFloat(document.getElementById("preco1").innerText);
                var qtd = parseFloat(document.getElementById("qtd1").value);
                var total = preco * qtd;

                document.getElementById("total1").innerHTML = String(total);
                valorTotal();
            }

            function somaProduto2(){
                var preco = parseFloat(document.getElementById("preco2").innerText);
                var qtd = parseFloat(document.getElementById("qtd2").value);
                var total = preco * qtd;

                document.getElementById("total2").innerHTML = String(total);
                valorTotal();
            }

            function somaProduto3(){
                var preco = parseFloat(document.getElementById("preco3").innerText);
                var qtd = parseFloat(document.getElementById("qtd3").value);
                var total = preco * qtd;

                document.getElementById("total3").innerHTML = String(total);
                valorTotal();
            }

            function valorTotal(){
                var total1 = parseFloat(document.getElementById("total1").innerText);
                var total2 = parseFloat(document.getElementById("total2").innerText);
                var total3 = parseFloat(document.getElementById("total3").innerText);
                var total = total1 + total2 + total3;

                document.getElementById("h3Total").innerText = "Valor total : " + String(total);
                qtdTotal();
            }
                    
            function qtdTotal(){
                var total1 = parseInt(document.forms["formID1"]["qtd1"].value);
                var total2 = parseInt(document.forms["formID2"]["qtd2"].value);
                var total3 = parseInt(document.forms["formID3"]["qtd3"].value);
                var total = total1 + total2 + total3;

                document.getElementById("h3QtdTotal").innerText = "Quantidade total : " + String(total);
            }
        </script>
    </head>

    <header id="headerAluno"></header>

    <body>
        <div class="wrapper">
            <br>
            <br>
            <div class="container">
                <h2>Meu carrinho</h2>
                <h4>Saldo: 50,00</h4>
                <br>
                <table class="table">
                    <tr>
                        <th>Produto</th>
                        <th>Preço unitário</th>
                        <th>Quantidade</th>
                        <th>Total</th>
                        <th>Remover</th>
                    </tr>

                    <tbody>
                        <tr>
                            <td>Pastel de forno</td>
                            <td id="preco1">4,00</td>
                            <td>
                                <form id="formID1" oninput="return somaProduto1()">
                                    <input type="number" id="qtd1" name="qtd1" class="form-control form-control-sm " value="1" min="1" style="width: 85px;">
                                </form>
                            </td>
                            <td id="total1">4,00</td>
                            <td>
                                <button class="btn blockItem"><i class="fas fa-trash"></i></button> 
                            </td>
                            
                        </tr>
                        <tr>
                            <td>Maçã</td>
                            <td id="preco2">1.49</td>
                            <td>
                                <form id="formID2" oninput="return somaProduto2()">
                                    <input type="number" id="qtd2" name="qtd2" class="form-control form-control-sm " value="1" min="1" style="width: 85px;">
                                </form>
                            </td>
                            <td id="total2">1.49</td>
                            <td>
                                <button class="btn blockItem"><i class="fas fa-trash"></i></button> 
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Suco de Maracuja</td>
                            <td id="preco3">4.00</td>
                            <td>
                                <form id="formID3" oninput="return somaProduto3()">
                                    <input type="number" id="qtd3" name="qtd3" class="form-control form-control-sm " value="1" min="1" style="width: 85px;">
                                </form>
                            </td>
                            <td id="total3">4.00</td>
                            <td>
                                <button class="btn blockItem"><i class="fas fa-trash"></i></button> 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>  
            
            <div class="container">

                <div class="row">
                    <div class="col-sm-4">
        
                        <h3 id="h3Total">
                        <script>
                            valorTotal();
                        </script>
                        </h3>
                    </div>
    
                    <div class="col-sm-4">
                        <h3 id="h3QtdTotal">
                        <script>
                            qtdTotal();
                        </script>
                        </h3>
                    </div>
    
                    <div class="col-sm-4">
                        <br>
                        <a href="#"> 
                            <button class="btn btn-default btn-lg addItem"><i class="fa fa-money-bill"></i> Comprar</button>
                        </a>
                    </div>
                </div>
    
                <br>
                <br>
                <br>
                <br>
            </div>
            
            <div class="push"></div>
        </div>
        
        <footer id="footer"></footer>
    </body>

    <script src="js/footer.js"></script>
    <script src="js/header.js"></script>
</html>