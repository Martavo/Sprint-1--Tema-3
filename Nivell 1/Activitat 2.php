<?php
 $X = array (10, 20, 30, 40, 50, 60);

 echo "El array X tiene una longitud de: " . count($X) . " valores.";

 unset($X[1]);

 $Y = [];

 foreach ($X as $numero) {
    $Y[] = $numero;
 }
    echo "<br>";
    echo "El array Y, habiendo eliminado un numero, tiene una longitud de: " . count($Y) . " valores.";

?>