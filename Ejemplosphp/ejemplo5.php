<?php

/** 
class Persona {

    public $nombre;
    public $edad;
    public $profesion;

}

$user = new Persona();

$user ->nombre ="Evert";
$user ->edad = 34;
$user ->profesion ="Sistemas";


echo "Nombre: $user->nombre<br>";
echo "Edad: $user->edad<br>";
echo "Profesion: $user->profesion<br>";

*/

class Persona {

    public $nombre;
    public $edad;
    public $profesion;

public function setPerson($nombreData, $edadData, $profesionData){
    $this ->nombre =$nombreData;
    $this ->edad =$edadData;
    $this ->profesion =$profesionData;
    return true;
    }

public function viewInformation (){
    echo "Nombre: $this->nombre<br>";
    echo "Edad: $this->edad<br>";
    echo "Profesion: $this->profesion<br>";
    return true;
    }   
}

$user = new Persona ();

$user->setPerson("Evert", 34, "Sistemas");

$user-> viewInformation();


?>

