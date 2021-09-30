$(document).ready(function(){
    $("#btnFilhos").click(function(){
      $("#filhos").show();
      $("#pagamentos").hide();
      $("#config").hide();
  });
});

$(document).ready(function(){
    $("#btnPagamentos").click(function(){
        $("#filhos").hide();
        $("#pagamentos").show();
        $("#config").hide();
  });
});

$(document).ready(function(){
    $("#btnConfig").click(function(){
        $("#filhos").hide();
        $("#pagamentos").hide();
        $("#config").show();
  });
});

