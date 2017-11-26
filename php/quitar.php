<?php
require '../../vendor/autoload.php';
$collection = (new MongoDB\Client)->codenmicoledb->codenmicoledb;
$updateResult = $collection->updateOne(
    ['documento' => $_COOKIE["variabl3"]],
    ['$set' => ['estado' => false]]
);
$cursor = $collection->find(['documento' => $_COOKIE["variabl3"]]);
$cont=0;
foreach ($cursor as $document) {
    $cont++;
    if($document['estado']==false){
        echo '<h2>Estado Cambiado</h2>';
    }
    else{
        echo '<h2>Estado no Cambiado</h2>';
    }
}
if($cont!=1){
    echo '<h2>Documento no encontrado</h2>';
}
?>