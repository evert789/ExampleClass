<?php

function esPar ($numero){

    if($numero % 2 == 0){
        echo "EL numero $numero es par <br>";
    } else{
        echo "El numero $numero es impar <br>";
    }

}

echo true;
echo "<br>";

echo false;

esPar(99);

esPar(16);

esPar(20);

esPar(-2);

esPar(15);

?>