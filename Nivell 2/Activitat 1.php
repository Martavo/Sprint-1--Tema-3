<?php

$lista1 = array (3,5,7.3,8);
$lista2 = array (40,26.3,5,78);

comunes($lista1, $lista2);
echo "<br>";
mezcla($lista1, $lista2);

function comunes ($lista1, $lista2){

    $interseccion = array_intersect($lista1, $lista2);

    print_r($interseccion);
}

function mezcla ($lista1, $lista2){

    $resultado = array_merge($lista1, $lista2);

    print_r($resultado);
}

?>