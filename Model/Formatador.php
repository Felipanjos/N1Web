<?php 

class Formatador {

  public static function formataValor($valor) {
    return number_format($valor, 2, ',', '.');
  }
}
?>