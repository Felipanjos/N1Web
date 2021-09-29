$(document).ready(function(){
    $("#filhos").hide();
    $("#pagamentos").hide();
    $("#config").hide();

    $("#btnFilhos").click(function(){
        $("#filho1").hide();
        $("#filho2").hide();
    });

        $("#btnFilho1").click(function(){
            $("#filho1").show();
            $("#filho2").hide();
        });

        $("#btnFilho2").click(function(){
            $("#filho1").hide();
            $("#filho2").show();
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

