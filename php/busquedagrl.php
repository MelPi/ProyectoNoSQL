<?php
require '../../vendor/autoload.php';

$collection = (new MongoDB\Client)->codenmicoledb->codenmicoledb;
$cursor = $collection->find(['estado' => true]);
<<<<<<< HEAD
echo '<table border=1><tr>';
foreach ($cursor as $document) {
    echo '<td>';
    echo $document['nombre'], "\n";
    echo '</td>';
}
echo '</table></tr>';
=======

foreach ($cursor as $document) {
    echo $document['nombre'], "\n";
}
>>>>>>> a347a73d087c3fa322b2231ef53e0c6e03167b18
?>