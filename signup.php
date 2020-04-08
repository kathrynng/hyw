<!DOCTYPE html>
<html lang="en">

<head>
    <title>sign-up-form</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open Sans'>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel='stylesheet' href="css/main.css">
    <link rel='stylesheet' href="css/login.css">


</head>




<body>
    <header>
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-transparent border-none shadow-sm">
            <a href="#" class="navbar-brand">
                <img src="images/Title 1.png" class="main-img" alt="heyyo world">
            </a>
        </div>
    </header>
    <section>
        <h3>Create Account</h3>
        <form method="POST" action="validateLogin.php">
            <fieldset>
                <label>First Name: </label> <input type="text" id="fname" name="fname"> <br>
                <label>Last Name: </label> <input type="text" id="lname" name="lname"> <br>
                <label>E-mail: </label> <input type="text" id="email" name="email"> <br>
                <label class="pass">Password:</label> <input type="password" id="password-field" name="password">
                <i id="password-status" class="fa fa-eye" aria-hidden="true" onclick="showPassword()"></i>
                <br><br>
                <input class="submit" name="submit" type="submit" value="Continue">
                <br><br>
                <input class="submit" name='login' type="submit" value="Login">


                <script>
                    function showPassword() {
                        var passwordInput = document.getElementById('password-field');
                        var passStatus = document.getElementById('password-status');

                        if (passwordInput.type == 'password') {
                            passwordInput.type = 'text';
                            passStatus.className = 'fa fa-eye-slash';

                        } else {
                            passwordInput.type = 'password';
                            passStatus.className = 'fa fa-eye';
                        }
                    }
                </script>

            </fieldset>
        </form>
        <?php
        include 'connection.php';

        if (isset($_POST['submit'])){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $pw = $_POST['password'];

            if($fname == null || $lname == null || $email == null || $pw == null){
                $_SESSION["registerMessage"] = "Missing Information";
                header('Location: signup.php');
            }
            else{
                $conn = sqlsrv_connect($servername, $connInfo);

                $sql = "SELECT firstname FROM users WHERE email = ?";
                $params = array($email);
                $stmt = sqlsrv_query($conn, $sql, $params);

                if ($stmt === false){
                    die(print_r (sqlsrv_errors(),true));
                }
                if(($emailChk = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) != null){
                    $_SESSION['registerMessage'] = "Email is registered";
                    header('Location: signup.php');   
                }
                else{
                    $sql = "INSERT INTO users (firstname, lastname, email, password) VALUES (?,?,?,?)";
                    $params = array($fname,$lname,$email,$pw);
                    $stmt = sqlsrv_query($conn, $sql, $params);

                    if ($stmt === false){
                        die(print_r (sqlsrv_errors(),true));
                    }

                }

                $_SESSION['registerMessage'] = "Registered!";

                header('Location: sign-up-form.php');

                



            }
        }

        ?>

    </section>

</body>



</html>