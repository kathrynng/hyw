<?php

session_start();

    if(isset($_POST['signup'])){
        header('Location: signup.php');
    }
     else if(isset($_POST['login'])){
        $authenticatedUser = validateLogin($_POST['email'], $_POST['password']);
        if($authenticatedUser != null){
            $_SESSION['authenticatedUser'] = $authenticatedUser;
            if ($_SESSION['adminLogin']!=null)
                header('Location: admin.php');
            else
                header('Location: usersite.php');
        }
            else
            header('Location: login.php');
    }

    function validateLogin($email, $pw){
        
        include 'connection.php';

        if ($email == null || $pw == null || strlen($email) == 0 || strlen($pw) == 0){
            return null;
        }
        
        //Check userID
        $conn = new mysqli($servername, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = mysqli_prepare($conn, "SELECT password FROM users WHERE email = ?");

        $sql -> bind_param('s',$email);

        $sql->execute();
        $result = mysqli_stmt_get_result($sql);

        if ($result <= 0) {
            die(print_r(mysqli_error($conn), true));
        }

        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if($row['password'] == $pw)
            $retStr = $email;
        else
            $retStr = null;

        if($retStr != null){
            $_SESSION['login'] = null;
            $_SESSION['authenticatedUser'] = $email;
        }else{
            $_SESSION['login'] = "Unable to login.";
        }

        mysqli_free_result($result);
        mysqli_close($conn);

        return $retStr;
        
      
    }

    function adminLogin($email){
        
        $_SESSION['adminLogin'] = null;

        include 'connection.php';
        $conn = new mysqli($servername, $username, $password, $database);

        $sql = mysqli_prepare($conn, "SELECT siteType FROM usersite WHERE email = ?");

        $sql -> bind_param('s',$email);

        $sql->execute();
        $result = mysqli_stmt_get_result($sql);

        if ($result <= 0) {
            die(print_r(mysqli_error($conn), true));
        }

        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if($row['siteType']==999){
            $_SESSION['adminLogin'] = 'admin';
           
        }else{
            $_SESSION['adminLogin'] = null  ;      }

        mysqli_free_result($result);
        mysqli_close($conn);



    }


?>