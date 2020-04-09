<?php
    include 'connection.php';

    $conn = new mysqli($servername, $username, $password, $database);
    
    $loadData = "./data.ddl";
    $data = file_get_contents($loadData, true);
    $lines = explode(";",$data);

    foreach( $lines as $line){
        $line = trim($line);
        if($line != ""){
            mysqli_query($conn, $line, array());
        }
    }
    mysqli_close($conn);

    header('Location: main.php');

?>