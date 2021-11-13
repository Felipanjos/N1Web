<?php 

class ControladorTipo {

    public static function tipo($categoria) {
        if(isset($categoria)) {
            if ($categoria == ('lanche' || 'almoco'|| 'doce')) {
                return new Comida("comida");
            }        
            if ($categoria == "bebida") {
                return new Bebida("bebida");
            }
            return null;
        }
    }
}
?>