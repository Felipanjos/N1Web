<?php 

class Formatador {

  public static function formataValor($valor) {
    return number_format($valor, 2, ',', '.');
  }

  public static function formataData($data) {
    return date_format($data, "d/m/y H:i:s");
  }
}

?>