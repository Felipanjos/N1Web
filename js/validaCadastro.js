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

var btnAlterarAluno = document.querySelector("#confirmarAlterarAluno");

btnAlterarAluno.addEventListener("click", function(event) {
    event.preventDefault();

    var pass = document.forms["formControleAlterarAluno"]["novaSenhaAluno"].value;
    var confPass = document.forms["formCadastroAluno"]["confNovaSenhaAluno"].value;
    var form = document.querySelector("#formControleAlterarAluno");
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



