
var login = document.getElementById('formLogin');

login.onsubmit = function(event) {
    event.preventDefault();
    
    var username = login.login.value.toLowerCase();
    var pass = login.pwd.value;
    var achou = false;

    if (username == "juninho" && pass == "123") {
        achou = true;
        window.location.href = "aluno.php";
    }

    if (username == "admin" && pass == "123") {
        achou = true;
        window.location.href = "cadastroProdutos.php";
    }

    if (username == "jorgemachado21" && pass == "123") {
        achou = true;
        window.location.href = "responsavel.php";
    }

    if (!achou) {
        alert("Usuário não cadastrado");
        login.reset();
    }
}


