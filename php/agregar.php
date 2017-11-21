<?php
require '../../vendor/autoload.php';
$collection = (new MongoDB\Client)->prubea->prubea;
$document = array( "nombre" => "William Moon" );
$collection->insert($document);
/*


$connection = new MongoClient();
$db = $connection->prubea;
$collection= $db->prubea;
$doc= array(
    "nombre"=>"nombre"
);
$collection->insert($doc);

    if($_POST){
        $collection = (new MongoDB\Client)->prubea;
        $db =$collection->prubea;
        $rec['nombre'] = $_POST['nombre'];
        $db->prueba->insert($rec);

        ---
        $persona = array("nombre" => "Joe", "edad" => 20);
        $colección->insert($persona);
        try {
            $collection->insert($persona, array("w" => 1));
        } catch(MongoCursorException $e) {
            echo "No se puede guardar dos veces la misma persona!\n";
        }
    }*/
   
