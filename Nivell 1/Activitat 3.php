<?php

$palabras = array ("hola", "perro", "html");

$caracter = 'h';

function pasapalabra ($palabras, $caracter){

    foreach ($palabras as $palabra) {
        if (strpos($palabra, $caracter) === false) {
            return false;
        }
    }
    return true;

}

$resultado = pasapalabra($palabras, $caracter);

if ($resultado === true) {
    echo "True";
} else {
    echo "False";
}

?>