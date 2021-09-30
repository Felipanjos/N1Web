$(document).ready(function(){
    var btnCadastrarAluno = document.querySelector("#cadastrarAluno");

    btnCadastrarAluno.addEventListener("click", function(event) {
        event.preventDefault();

        var pass = document.forms["formCadastroAluno"]["senhaAluno"].value;
        var confPass = document.forms["formCadastroAluno"]["confSenhaAluno"].value;
        var form = document.querySelector("#formCadastroAluno");
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