<?php 
    $globlev =10;

    function demposcope(){
        $localvar = 5;
        echo "local variable:$localvar<br>";

        global $globlevar;
        echo "globle variable inside function:
        $globlevar<br>";

        static $staticvar = 0;
        $staticvar++;
        echo "static variabal:$staticvar<br>";
    }

    echo "first call:<br>";


?>