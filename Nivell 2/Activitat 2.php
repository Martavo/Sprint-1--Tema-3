<?php
$notas = array(
    "Luca" => array(7, 6, 9, 7, 10),
    "Anna" => array(4, 6, 5, 7, 4),
    "Laura" => array(6, 9, 5, 9, 7),
    "Pedro" => array(4, 6, 2, 9, 6)
);

calculos($notas);

function calculos($notas)
{
    $mediaAlumno = array();

    foreach ($notas as $nombre => $nota) {
        $media = array_sum($nota) / count($nota);
        $mediaAlumno[$nombre] = $media;
    }

    print_r($mediaAlumno);
    echo "<br>";

    
    $mediaComun = array_sum($mediaAlumno) / count($mediaAlumno);

    echo "La media de todos los alumnos es: " . $mediaComun;
    
}
?>