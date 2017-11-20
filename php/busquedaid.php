<?php
require '../../vendor/autoload.php';

$collection = (new MongoDB\Client)->codenmicoledb->codenmicoledb;
$cursor = $collection->find(['documento' => '74085192']);

foreach ($cursor as $document) {
    echo $document['nombre'], "\n";
}
?>