<?php
    if(isset($_POST['signup'])){
        header('Location: signup.php');
    }
     else if(isset($_POST['login'])){
        $authenticatedUser = validateLogin($_POST['email'], $_POST['password']);
        if($authenticatedUser != null)
            header('Location: main.php');
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

        $sql->bind_param('s',$email);

        $result = $sql->execute();

        if ($result == false){
            die(print_r (mysqli_error($conn),true));
        }

        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if($row['password'] == $pw)
            $retStr = $email;
        else
            $retStr = null;
        
        mysqli_close($conn);

        if($retStr != null){
            $_SESSION['login'] = null;
            $_SESSION['authenticatedUser'] = $email;
        }else{
            $_SESSION['login'] = "Unable to login.";
        }

        return $retStr;
        
        mysqli_free_result($result);
        mysqli_close($conn);
    }


?>