

$(document).ready(function(){
    var btnCadastrarResponsavel = document.querySelector("#cadastrar");

    btnCadastrarResponsavel.addEventListener("click", function(event) {
        event.preventDefault();
    
        var pass = document.forms["formCadastro"]["senha"].value;
        var confPass = document.forms["formCadastro"]["confSenha"].value;
        var form = document.querySelector("#formCadastro");
        var senhaVazia = (pass == "" && confPass == "");
    
        if (!((pass === confPass) && !senhaVazia)) {
            alert("Senha não confere.");   
        }
        
        else if (senhaVazia) {
            alert("Senha e Confirmar senha devem ser preenchidos.");
            return;
        }
    
        form.reset();
    });
});