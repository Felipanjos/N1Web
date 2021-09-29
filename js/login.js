
var login = document.getElementById('formLogin');
const logado = false;
login.onsubmit = function(event) {
    event.preventDefault();
    
    var username = login.username.value;
    var pass = login.pwd.value;

    if (username == "aluno" && pass == "123") {
        logado = true;
        window.location.href = "aluno.html";
    }

    // else if (email == "funcionario" && pass == "123") {

    //     window.location.href = "funcionario.html";
    // }

    else if (email == "responsavel" && pass == "123") {

        window.location.href = "responsavel.html";
    }
}


