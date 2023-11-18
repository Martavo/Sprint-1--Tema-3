<?php
$numeros = [3,5,7,8,9];

$resultado = array_map("elevaralcubo",$numeros);

print_r($resultado);

function elevaralcubo (int $numero): int{
    
    return pow($numero, 3);
}

?>