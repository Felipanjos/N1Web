var botao = document.querySelector("#cadastrar");

botao.addEventListener("click", function(event) {
    event.preventDefault();

    var pass = document.forms["formCadastro"]["senhaResp"].value;
    var confPass = document.forms["formCadastro"]["confSenha"].value;
    var form = document.querySelector("#formCadastro");
    var senhaVazia = (pass == "" && confPass == "");

    console.log(pass);
    console.log(confPass);

    if ((pass == confPass) && !senhaVazia) {
        alert("Cadastro realizado com sucesso.");   
    }
    
    else if (senhaVazia) {
        alert("Senha e Confirmar senha devem ser preenchidos.");
        return;
    }

    form.reset();
})