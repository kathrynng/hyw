<?php
    session_start();
    $_SESSION['authenticatedUser'] = null;
    header('Location: main.php');
?>