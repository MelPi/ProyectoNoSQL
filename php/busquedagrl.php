<?php
require '../../vendor/autoload.php';
$dia = date("d");
$mes = date("m");
$ano = date("Y");
$stri = $ano . "-";
$stri = $stri . $mes . "-";
$collection = (new MongoDB\Client)->codenmicoledb->codenmicoledb;

$cursor = $collection->find(['estado' => true]);
echo '<table border=1>';
echo '<tr>';
echo '<td>Nombres</td>';
foreach ($cursor as $document2) {
    echo '<td>';
    echo $document2['nombre'], "\n";
    echo '</td>';
}
echo '</tr>';
for ($i = 1; $i <= $dia; $i++) {
    $diaas= $stri .  $i;
    echo '<tr>';
    echo '<td>Fecha: ';
    echo  $diaas;  
    echo '</td>';
    $cursor2 = $collection->find(['estado' => true]);
    foreach ($cursor2 as $document) {
        echo '<td>';
        foreach($document['asistencias'] as $num=>$asis){
            if ($asis['fecha'] == $diaas){
                    echo $asis['horaingreso'], "\n";
                echo '/';
                    echo $asis['horasalida'], "\n";
                echo '/';
                    echo $asis['tiempototal'], "\n";

            }
            
       }
        echo '</td>';
    }
    echo '</tr>';
}

echo '</table>';
?>