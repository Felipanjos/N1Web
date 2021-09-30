

$(document).ready(function(){
    var btnCadastrarResponsavel = document.querySelector("#cadastrar");

    btnCadastrarResponsavel.addEventListener("click", function(event) {
        event.preventDefault();
    
        var pass = document.forms["formCadastro"]["senhaResp"].value;
        var confPass = document.forms["formCadastro"]["confSenhaResp"].value;
        var form = document.querySelector("#formCadastro");
        var senhaVazia = (pass == "" && confPass == "");
    
        if ((pass == confPass) && !senhaVazia) {
            alert("Cadastro realizado com sucesso.");   
        }
        
        else if (senhaVazia) {
            alert("Senha e Confirmar senha devem ser preenchidos.");
            return;
        }
    
        form.reset();
    });
});