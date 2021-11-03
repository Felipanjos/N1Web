$(document).ready(function(){
    $("#btnAlunos").click(function(){
        $("#alunos").show();
        $("#pagamentos").hide();
        $("#config").hide();
    });

    $("#btnPagamentos").click(function(){
        $("#alunos").hide();
        $("#pagamentos").show();
        $("#config").hide();
    });

    $("#btnConfig").click(function(){
        $("#alunos").hide();
        $("#pagamentos").hide();
        $("#config").show();
    });
});


