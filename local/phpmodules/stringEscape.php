<?php
    #Правка строк для парсера с Lenta.ru, экранирует кавычки
    function string_escaper($s){
        $s = str_replace("'","\\'",$s);
        $s = str_replace('"','\\"',$s);
        return $s;
    }
?>