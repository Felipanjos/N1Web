$(document).ready(function(){
    $("#filhos").show();
    $("#pagamentos").hide();
    $("#config").hide();

    $("#btnPagamentos").click(function(){
        $("#pix").show();
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

