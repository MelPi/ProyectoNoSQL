<?php
require '../../vendor/autoload.php';

$collection = (new MongoDB\Client)->codenmicoledb->codenmicoledb;
$cursor = $collection->find(['estado' => true]);

foreach ($cursor as $document) {
    echo $document['nombre'], "\n";
}
?>