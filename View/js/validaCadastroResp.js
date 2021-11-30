function confirmaUpdate() {
    return confirm("Confirmar alterações?");
}

$(document).ready(function(){
    var btnCadastrarResponsavel = document.querySelector("#alterar");

    btnCadastrarResponsavel.addEventListener("click", function(event) {						
            var pass = document.forms["formUpdateResponsavel"]["novaSenhaResp"].value;
            var confPass = document.forms["formUpdateResponsavel"]["confNovaSenhaResp"].value;
            var form = document.querySelector("#formUpdateResponsavel");
            var senhaVazia = (pass == "" && confPass == "");
    
            if (!((pass === confPass) && !senhaVazia)) {
                event.preventDefault();
                alert("Senha e confirmar senha não conferem.");  
                form.reset();
                return;
            }
            
            else if (senhaVazia) {
                event.preventDefault();
                alert("Senha e Confirmar senha devem ser preenchidos.");
                form.reset();
                return;
            }
    });
});


$(document).ready(function(){
    var btnCadastrarResponsavel = document.querySelector("#alterarRespAdmin");

    btnCadastrarResponsavel.addEventListener("click", function(event) {						
            var pass = document.forms["formUpdateResponsavelAdmin"]["novaSenhaResp"].value;
            var confPass = document.forms["formUpdateResponsavelAdmin"]["confNovaSenhaResp"].value;
            var form = document.querySelector("#formUpdateResponsavel");
            var senhaVazia = (pass == "" && confPass == "");
    
            if (!((pass === confPass) && !senhaVazia)) {
                event.preventDefault();
                alert("Senha e confirmar senha não conferem.");  
                form.reset();
                return;
            }
            
            else if (senhaVazia) {
                event.preventDefault();
                alert("Senha e Confirmar senha devem ser preenchidos.");
                form.reset();
                return;
            }
    });
});

$(document).ready(function(){
    var btnCadastrarResponsavel = document.querySelector("#confirmarAlterarDadosAluno");

    btnCadastrarResponsavel.addEventListener("click", function(event) {						
            var pass = document.forms["formControleAlterarAluno"]["novaSenhaAluno"].value;
            var confPass = document.forms["formControleAlterarAluno"]["confNovaSenhaAluno"].value;
            var form = document.querySelector("#formControleAlterarAluno");
            var senhaVazia = (pass == "" && confPass == "");
    
            if (!((pass === confPass) && !senhaVazia)) {
                event.preventDefault();
                alert("Senha e confirmar senha não conferem.");  
                form.reset();
                return;
            }
            
            else if (senhaVazia) {
                event.preventDefault();
                alert("Senha e Confirmar senha devem ser preenchidos.");
                form.reset();
                return;
            }
    });
});

$(document).ready(function(){
    var btnCadastrarResponsavel = document.querySelector("#confirmarAlterarDadosAluno");

    btnCadastrarResponsavel.addEventListener("click", function(event) {						
            var pass = document.forms["formControleAlterarAluno"]["senha"].value;
            var confPass = document.forms["formControleAlterarAluno"]["confSenha"].value;
            var form = document.querySelector("#formControleAlterarAluno");
            var senhaVazia = (pass == "" && confPass == "");
    
            if (!((pass === confPass) && !senhaVazia)) {
                event.preventDefault();
                alert("Senha e confirmar senha não conferem.");  
                form.reset();
                return;
            }
            
            else if (senhaVazia) {
                event.preventDefault();
                alert("Senha e Confirmar senha devem ser preenchidos.");
                form.reset();
                return;
            }
    });
});
