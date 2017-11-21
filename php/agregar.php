<?php
require '../../vendor/autoload.php';
    if($_POST){
        $connection = new Mongo();
        $db =$connection->prubea;
        $rec['nombre'] = $_POST['nombre'];
        $db->precord->insert($rec);
    }
