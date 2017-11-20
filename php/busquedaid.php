<?php
require '../../vendor/autoload.php';

$collection = (new MongoDB\Client)->codenmicoledb->codenmicoledb;
<<<<<<< HEAD
$cursor = $collection->find(['documento' => '72378629']);

foreach ($cursor as $document) {
    
    foreach($document['asistencias'] as $num=>$asis){
      echo "r:  "
           .$asis['fecha']
           .$asis['horaingreso']
           .$asis['horasalida']
           .$asis['tiempototal'];
   }
    
=======
$cursor = $collection->find(['documento' => '74085192']);

foreach ($cursor as $document) {
    echo $document['nombre'], "\n";
>>>>>>> c265facc2bcb01445d2e380b4c9901151368b2c0
}

?>