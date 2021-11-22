$(document).ready(function(){

    $("#formResp").show();
    $("#formFuncionario").hide();
    
    $("#btnFuncionario").click(function(){
        $("#formResp").hide();
        $("#formFuncionario").show();
    });
    
    $("#btnResponsavel").click(function(){
        $("#formResp").show();
        $("#formFuncionario").hide();
    });
});