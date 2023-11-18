<?php
$palabras = ["trueno", "pera", "helicoptero", "luna"];

$resultado = array_filter($palabras, "seleccionarPares");

print_r($resultado);

function seleccionarPares (string $palabra): bool{
    return strlen($palabras) % 2 === 0;
}


?>