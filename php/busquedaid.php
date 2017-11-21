<?php
require '../../vendor/autoload.php';
$collection = (new MongoDB\Client)->codenmicoledb->codenmicoledb;

$cursor = $collection->find(['documento' => $_COOKIE["variabl"]]);

foreach ($cursor as $document) {
    echo '<h2>';
    echo $document['nombre'];
    echo '</h2>';
    echo '<table border=1>';
    foreach($document['asistencias'] as $num=>$asis){
        echo '<tr><td>';
        echo $asis['fecha'], "\n";
        echo '</td>';
        echo '<td>';
            echo $asis['horaingreso'], "\n";
        echo '</td>';
        echo '<td>';
            echo $asis['horasalida'], "\n";
        echo '</td>';
        echo '<td>';
            echo $asis['tiempototal'], "\n";
        echo '</td></tr>';
   }
    echo '</table>';
    
}

?>