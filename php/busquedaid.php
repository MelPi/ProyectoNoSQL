<?php
require '../../vendor/autoload.php';

$collection = (new MongoDB\Client)->codenmicoledb->codenmicoledb;
$cursor = $collection->find(['documento' => '72378629']);

foreach ($cursor as $document) {
<<<<<<< HEAD
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
=======
    
    foreach($document['asistencias'] as $num=>$asis){
      echo "r:  "
           .$asis['fecha']
           .$asis['horaingreso']
           .$asis['horasalida']
           .$asis['tiempototal'];
   }
>>>>>>> ed1c8e808070223d444e4df48b9aa3b8685ae32f
    
}

?>