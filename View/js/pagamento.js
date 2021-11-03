$(document).ready(function(){
    $("#alunos").hide();
    $("#pagamentos").hide();
    $("#config").hide();

    $("#btnAlunos").click(function(){
        $("#aluno1").hide();
    });

        $("#btnAluno1").click(function(){
            $("#aluno1").show();
        });


    $("#btnPagamentos").click(function(){
        $("#pix").hide();
        $("#cartao").hide();
        $("#historico").show();
    });
    
        $("#btnPix").click(function(){
            $("#pix").show();
            $("#cartao").hide();
            $("#historico").show();
        });
        
        $("#btnCartao").click(function(){
            $("#pix").hide();
            $("#cartao").show();
            $("#historico").show();
        });
});

