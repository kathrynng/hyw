<!DOCTYPE html>
<html>
    <head>
        <title>HYW Admin</title>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/main_browse.css">
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
                    <a class="dropdown-item" href="#">My Profile</a>  
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
    <div class="container-fluid">
        <h1>Admin Corner</h1>
    <?php
     include 'connection.php';

     $conn = new mysqli($servername, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = mysqli_prepare($conn, "SELECT firstname, lastname, email FROM users");
        $sql -> execute();

        $result = mysqli_stmt_get_result($sql);
        if($result==false){
            die(print_r(mysqli_error($conn), true));
        }
    ?>
    <hr>
    <h2>User List</h2>
    <table>
        <tr><th>Email</th><th>First Name</th><th>Last Name</th></tr>
        <?php
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
           
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
             $email = $row['email'];
           
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                echo('<tr><td>'.$email.'</td><td>'.$firstname.'</td><td>'.$lastname.'</td></tr>');
            }

        ?>
    </table>
    <br><br>
    <h2>User Sites</h2>
    <table>
        <tr><th>Email</th><th>Profession</th><th>Site Type</th></tr>
        <?php
        $sql = mysqli_prepare($conn, "SELECT email, userType, siteType FROM usersite");
        $sql -> execute();

        $result = mysqli_stmt_get_result($sql);
        if($result==false){
            die(print_r(mysqli_error($conn), true));
        }

            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
           
            $email = $row['email'];
            $usertype = $row['userType'];
             $sitetype = $row['siteType'];
           
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                echo('<tr><td>'.$email.'</td><td>'.$usertype.'</td><td>'.$sitetype.'</td></tr>');
            }

            mysqli_free_result($result);
            mysqli_close($conn);

        ?>
    </table>
        </div>
        
    </body>
</html>