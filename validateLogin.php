<?php
    session_start();

    if(isset($_POST['sign-up'])){
        header('Location: signup.php');
    } else if(isset($_POST['login'])){
        $authenticatedUser = validateLogin();
    }

    function validateLogin(){
        $email = $_POST('email');
        $pw = $_POST('password');

        if ($email == null || $pw == null || strlen($email) == 0 || strlen($pw) == 0){
            return null;
        }

        include 'connection.php';
        $conn = sqlsrv_connect($servername, $connInfo);
        
        //Check userID
        $sql = "SELECT password FROM users WHERE email = ?";
        $params = array($email);
        $stmt = sqlsrv_query($conn, $sql, $params);
        if ($stmt == false){
            die(print_r (sqlsrv_errors(),true));
        }
        $valid = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
        if($valid['password'] == $pw)
            $retStr = $email;
        else
            $retStr = null;
        
        sqlsrv_free_stmt($pstmt);
        sqlsrv_close($conn);

        if($retStr != null){
            $_SESSION['login'] = null;
            $_SESSION['authenticatedUser'] = $email;
        }else{
            $_SESSION['login'] = "Unable to login.";
        }

        return $retStr;
    }

    sqlsrv_free_stmt($stmt);
    sqlsrv_close($conn);

?>