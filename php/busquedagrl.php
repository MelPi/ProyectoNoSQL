<?php
require '../../vendor/autoload.php';

$collection = (new MongoDB\Client)->codenmicoledb->codenmicoledb;
$cursor = $collection->find(['estado' => true]);
echo '<table border=1><tr>';
foreach ($cursor as $document) {
    echo '<td>';
    echo $document['nombre'], "\n";
    echo '</td>';
}
echo '</table></tr>';
?>