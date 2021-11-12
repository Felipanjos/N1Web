$(document).ready(function(){
    $(".formulario").hide();
    
    $("#btnlanches").click(function(){
      $("#lanches").show();
      $("#bebidas").hide();
      $("#doces").hide();
      $("#almoco").hide();
    });

    $("#btnbebidas").click(function(){
      $("#lanches").hide();
      $("#bebidas").show();
      $("#doces").hide();
      $("#almoco").hide();
    });

    $("#btndoces").click(function(){
      $("#lanches").hide();
      $("#bebidas").hide();
      $("#doces").show();
      $("#almoco").hide();
    });

    $("#btnalmoco").click(function(){
      $("#lanches").hide();
      $("#bebidas").hide();
      $("#doces").hide();
      $("#almoco").show();
    });
    
    $("#btnmenu").click(function(){
      $("#lanches").hide();
      $("#bebidas").hide();
      $("#doces").hide();
      $("#almoco").hide();
    });
});

