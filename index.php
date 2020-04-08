<?php

    include 'connection.php';

    $conn = sqlsrv_connect($servername, $connInfo);
    
    $loadData = "./data.ddl";
    $data = file_get_contents($loadData, true);
    $lines = explode(";",$data);

    foreach( $lines as $line){
        $line = trim($line);
        if($line != ""){
            sqlsrv_query($conn, $line, array());
        }
    }
    sqlsrv_query();

    header('Location: main.php');

?>