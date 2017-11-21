<?php
require '../../vendor/autoload.php';

$collection = (new MongoDB\Client)->codenmicoledb->codenmicoledb;
$cursor = $collection->find(['documento' => '72378629']);
foreach ($cursor as $document) {
    foreach($document['asistencias'] as $num=>$asis){
      echo "r:  "
           .$asis['fecha']
           .$asis['horaingreso']
           .$asis['horasalida']
           .$asis['tiempototal'];
   }
    
}

?>