$(document).ready(function(){

    $("#formResp").hide();
    $("#formFuncionario").show();
    
    $("#btnFuncionario").click(function(){
        $("#formResp").hide();
        $("#formFuncionario").show();
    });
    
    $("#btnResponsavel").click(function(){
        $("#formResp").show();
        $("#formFuncionario").hide();
    });
});