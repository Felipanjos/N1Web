$(document).ready(function(){
    //Hide forms
    $("#formControleAlterarAluno").hide();

    $("#alterarDadosAluno").click(function(){
        $("#formControleAlterarAluno").show();
    });

    $("#collapse").click(function(){
        $("#formControleAlterarAluno").hide();
    });

    // Buttons e ícones
    var itens = document.querySelectorAll(".item");
    var itensBloqueados = document.querySelectorAll(".itemBloqueado");
    var botoes = document.getElementsByClassName("btn btn-default btn-lg blockItem");
    var botoesDesbloquear = document.getElementsByClassName("btn btn-default btn-lg unblockItem");
    
    for (var i = 0; i < itens.length; i++) {
        
        var item = itens[i];
        
        var button = document.createElement("button");
        button.type = "button";
        button.classList.add("btn", "btn-default", "btn-lg", "blockItem");
        button.textContent = "Bloquear ";
        item.appendChild(button);
    }

    for (i = 0; i < botoes.length; i++) {
        
        var botao = botoes[i];
        
        var iconBan = document.createElement("i");
        iconBan.classList.add("fa", "fa-ban");
        botao.appendChild(iconBan);
    }
    
    for(i = 0; i < itensBloqueados.length; i++) {

        var itemBloqueado = itensBloqueados[i];

        var buttonBlock = document.createElement("button");
        buttonBlock.type = "button";
        buttonBlock.textContent = "Desbloquear ";
        buttonBlock.classList.add("btn", "btn-default", "btn-lg", "unblockItem");
        itemBloqueado.appendChild(buttonBlock);
    }
    
    for (i = 0; i < botoesDesbloquear.length; i++) {
        
        var botaoDesbloquear = botoesDesbloquear[i];
        
        var iconCheck = document.createElement("i");
        iconCheck.classList.add("fas", "fa-check");
        botaoDesbloquear.appendChild(iconCheck);
    }
});