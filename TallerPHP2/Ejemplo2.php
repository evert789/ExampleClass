<?php

function actividades ($actividad){

    switch ($actividad){
        case 'Despertar':
            
        echo "Persona Levantada!! <br>";
            break;

        case 'Correr':
            echo "La persona esta corriendo!! <br>";
            break;
        
        case 'Leer':
            echo "La persona esta leyendo un libro!! <br>";
            break;
        
        case 'Desayunar':
            echo "La persona esta tomando el desayuno!! <br>";
            break;

        case 'Trabajar':
            echo "La persona esta trabajando en la construccion de una pagina web!! <br>";
            break;
        
        default:
            echo "Actividad no contemplada <br>";
            break;

    }

    return true;
}


actividades("Dormir");

actividades("Leer");

actividades("Trabajar");




?>