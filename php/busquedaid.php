<?php
require '../../vendor/autoload.php';

$collection = (new MongoDB\Client)->codenmicoledb->codenmicoledb;
$cursor = $collection->find(['documento' => '74085192']);

foreach ($cursor as $document) {
    echo $document['nombre'], "\n";
}
<<<<<<< HEAD

=======
>>>>>>> a347a73d087c3fa322b2231ef53e0c6e03167b18
?>