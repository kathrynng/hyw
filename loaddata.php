<?php
    include 'connection.php';

    $conn = new mysqli($servername, $username, $password, $database);
    
    $loadData = "data.ddl";
    $data = file_get_contents($loadData, true);
    $lines = explode(";",$data);

    foreach( $lines as $line){
        $line = trim($line);
        if($line != ""){
            mysqli_query($conn, $line, array());
        }
    }
    mysqli_close($conn);

    session_reset();
    
    include 'logout.php';

    header('Location: main.php');

?>