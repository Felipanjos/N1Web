$(document).ready(function(){

    // $("#divFornecedor").hide();
    var fornecedor = document.getElementById("fornecedor");
    var ingredientes = document.getElementById("ingredientes");

    // var radioGroup = document.querySelectorAll(".categoria");
    // console.log(radioGroup[0].value);

    $('input:radio').on('click', function(radioGroup) {
        
        let valorRadio = radioGroup.currentTarget.value;

        if (valorRadio === "bebida") 
            mostraFornecedores();
        if (["almoco", "doce", "lanche"].includes(valorRadio))
            mostraIngredientes();
    });

    function mostraIngredientes() {
        $("#divIngredientes").show();
        document.getElementById("ingredientes").required = true;
        $("#divFornecedor").hide();
        fornecedor.required = false;
        fornecedor.value = null;
    }
    
    function mostraFornecedores() {
        $("#divFornecedor").show();
        document.getElementById("fornecedor").required = true;
        $("#divIngredientes").hide();
        ingredientes.required = false;
        ingredientes.value = null;
    }
});


