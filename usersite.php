<?php
    session_start();

    include 'connection.php';

    $conn = new mysqli($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = mysqli_prepare($conn, "SELECT siteType FROM usersite WHERE email = ?");

    $sql -> bind_param('s',$_SESSION['authenticatedUser']);

    $sql->execute();
    $result = mysqli_stmt_get_result($sql);

    echo(mysqli_num_rows($result));

    if ($result == false) {
        die(print_r(mysqli_error($conn), true));
    }else{
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        
        $siteType = $row['siteType'];

        if($siteType == 1){
            header('Location: userGrid.php');
        }else if($siteType == 2){
            header('Location: userSlide.php');
        }else if($siteType == 999){
            header('Location: admin.php');
        }
    }

    mysqli_free_result($result);
    mysqli_close($conn);
    
?>