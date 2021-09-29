
var login = document.getElementById('formLogin');

login.onsubmit = function(event) {
    event.preventDefault();
    
    var username = login.login.value;
    var pass = login.pwd.value;

    if (username == "aluno" && pass == "123") {
        window.location.href = "aluno.html";
    }

    if (email == "funcionario" && pass == "123") {

        window.location.href = "funcionario.html";
    }

    if (username == "responsavel" && pass == "123") {

        window.location.href = "responsavel.html";
    }
}


