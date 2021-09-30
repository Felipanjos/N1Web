var botao = document.querySelector("#cadastrar");

botao.addEventListener("click", function(event) {
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

var botao2 = document.querySelector("#cadastrarAluno");

botao2.addEventListener("click", function(event) {
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



