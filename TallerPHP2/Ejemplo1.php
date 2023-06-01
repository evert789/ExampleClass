<?php

$miArray =[
    "nombres" =>"Evert Antonio",
    "apellidos" =>"Aguilar Muñoz",
    "tipoIdentificacion" =>"CC",
    "numeroIdentificacion" => 1032396293,
    "telefono" => 3115310071,
    "email" => "eaam789@gmail.com",
    "profesion" => "Sistemas",
    "rol" => "administrador"
];

foreach ($miArray as $key => $value) {

    echo "$key : $value <br>";
    echo "$key <br>";
    echo "$value <br>";

    echo "------------------------------ <br>";
    
}

foreach ($miArray as $value){
    echo "$value <br>";
    echo "------------------------------ <br>";
}


$miArrayNext = array(

    "nombres" =>"Evert Antonio",
    "apellidos" =>"Aguilar Muñoz",
    "tipoIdentificacion" =>"CC",
    "numeroIdentificacion" => 1032396293,
    "telefono" => 3115310071,
    "email" => "eaam789@gmail.com",
    "profesion" => "Sistemas",
    "rol" => "administrador"
);

foreach ($miArrayNext as $data => $info) {
    echo "$data : $info <br>";
    echo "**************<br>";

}

foreach ($miArrayNext as $info) {
    echo "$info <br>";
    echo "//////////////<br>";

}




?>