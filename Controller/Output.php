<?php 

class Output {

    public static function formata($input) {
        foreach($input as $key=>$val) {
            if($key != 'submit') {
                echo $key . "=>" . $val . "<br/>";
            }
        }
    }
}
?>