<!DOCTYPE html>
<html lang="en">
    <?php 
        session_start(); 
        
        include 'connection.php';

        if (isset($_SESSION['registeredUser'])){
            if($_SESSION['registeredUser']!=null){
                $conn = new mysqli($servername, $username, $password, $database);

                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = mysqli_prepare($conn, "SELECT * FROM users WHERE email = ?");
                $sql -> bind_param('s', $_SESSION['registeredUser']);
                $sql->execute();
                $result = mysqli_stmt_get_result($sql);

                if ($result <= 0) {
                    die(print_r(mysqli_error($conn), true));
                }else{
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                    $ofname = $row['firstname'];
                    $olname = $row['lastname'];
                    $oemail = $row['email'];
                }

                $sql = mysqli_prepare($conn, "SELECT * FROM usersite WHERE email = ?");
                $sql -> bind_param('s', $_SESSION['registeredUser']);
                $sql -> execute();
                $result = mysqli_stmt_get_result($sql);

                if ($result <= 0) {
                    die(print_r(mysqli_error($conn), true));
                }else{
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                    $oprofession = $row['userType'];
                }

                mysqli_free_result($result);
                mysqli_close($conn);

            }
        }
        else if (isset($_SESSION['authenticatedUser']) && isset($_POST['mySite'])){
                if($_SESSION['authenticatedUser']!=null){

                }
    }

    ?>
    <head>
        <title><?php
 if (isset($_SESSION['registeredUser'])){
    if($_SESSION['registeredUser']!=null){
        echo $ofname . "'s HYW";
    }}
        ?></title>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/grid.css">
    </head>
    <body>
    <div class="collapse navbar-collapse nav justify-content-between d-flex flex-column flex-md-row align-items-center mb-3 bg-white border-bottom shadow-sm pd-2">
        <a href="#" class="navbar-brand">
            <img src="images/Title 1.png" class="main-img" alt="heyyo world">
        </a>
        <ul>
        <li class = "nav-item
            <?php
                if(isset($_SESSION['authenticatedUser'])){
                    if ($_SESSION['authenticatedUser'] != null){
                        $user = $_SESSION['authenticatedUser'];
                        echo ' dropdown';    
                    }
                }
            ?>"
        >
        <?php
            if(isset($_SESSION['authenticatedUser'])){
                if ($_SESSION['authenticatedUser'] != null){
                    $user = $_SESSION['authenticatedUser'];
                    echo '
                    <a class=" sign-login nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      My HYW
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <form method="POST" action="usersite.php">
                        <input type="submit" class="dropdown-item" name="mySite" value="My Profile">  
                    </form>
                    <a class="dropdown-item" href="#">My Clients</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="logout.php">Log Out</a>
                     
                    </div>
                    ';
                }
            }else
                   echo '<a class="sign-login" href="login.php">Login</a>';
                
        ?>
        
        </li>
        </ul>

    </div>




    </body>
</html>