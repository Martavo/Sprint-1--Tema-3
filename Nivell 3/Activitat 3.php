<?php
$numeros = [3, 6, 8, 24, 68, 5];

$resultado = array_reduce($numeros, 'sumarPrimos', 0);

echo "La suma de los números primos en el array es: $resultado";

function saberPrimo(int $numero): bool {
    
    if ($numero <= 1) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    
    return true;
}

function sumarPrimos(int $acumulador, int $valor): int {
    if (saberPrimo($valor)) {
        return $acumulador + $valor;
    } else {
        return $acumulador;
    }
}
?>