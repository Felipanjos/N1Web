$(document).ready(function(){
    $(".formulario").hide()
});

$(document).ready(function(){
    $("#btnlanches").click(function(){
      $("#lanches").show();
      $("#bebidas").hide();
      $("#doces").hide();
      $("#almoco").hide();
  });
});


$(document).ready(function(){
    $("#btnbebidas").click(function(){
      $("#lanches").hide();
      $("#bebidas").show();
      $("#doces").hide();
      $("#almoco").hide();
  });
});

$(document).ready(function(){
    $("#btndoces").click(function(){
      $("#lanches").hide();
      $("#bebidas").hide();
      $("#doces").show();
      $("#almoco").hide();
  });
});

$(document).ready(function(){
    $("#btnalmoco").click(function(){
      $("#lanches").hide();
      $("#bebidas").hide();
      $("#doces").hide();
      $("#almoco").show();
  });
});


$(document).ready(function(){
  $("#btnmenu").click(function(){
    $("#lanches").hide();
    $("#bebidas").hide();
    $("#doces").hide();
    $("#almoco").hide();
});
});
