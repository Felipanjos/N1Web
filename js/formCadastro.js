$(document).ready(function(){

    $("#formResp").show();
    $("#formAluno").hide();
    
    $("#btnAluno").click(function(){
        $("#formResp").hide();
        $("#formAluno").show();
    });
    
    $("#btnResponsavel").click(function(){
        $("#formResp").show();
        $("#formAluno").hide();
    });
});