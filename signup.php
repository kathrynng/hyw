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
    <?php
        session_start();
    ?>
    <header>
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-transparent border-none shadow-sm">
            <a href="main.php" class="navbar-brand">
                <img src="images/Title 1.png" class="main-img" alt="heyyo world">
            </a>
        </div>
    </header>
    <section>
        <h3>Create Account</h3>
    <?php
    if (isset($_SESSION["registerMessage"])) {
        if ($_SESSION["registerMessage"] != null) {
            echo ('<h4>' . $_SESSION["registerMessage"] . '</h4>');
        }
    }
    ?>
    <script>
    function validation(form){
            complete = true;
                $('#alert').remove();
                var regexEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if(form.email.value == "" && regexEmail.test(form.email.value)==false){
                    $('#email').addClass('is-invalid');
                    $('#email').next().after("<small id='alert'>Please enter a valid email.<br><br></small>")
                    complete = false;
                }
                else if($('#alert').length){
                    $('#email').removeClass('is-invalid');
                    $('#alert').remove();
                    
                }
            
            $('#alertFname').remove();
            var regexName = /^[a-z ,.'-]+$/i
            if (form.fname.value == "" && regexName.test(form.fname.value)==false){
                $('#fname').addClass('is-invalid');
                $('#fname').next().after("<small id='alertFname'>Please enter a valid first name.<br></small>")
                complete = false;
            }else if($('#alertFname').length){
                $('#fname').removeClass('is-invalid');
                    $('#alertFname').remove();
                   
            }

            $('#alertLname').remove();
            if (form.lname.value == "" && regexName.test(form.lname.value)==false){
                $('#lname').addClass('is-invalid');
                $('#lname').next().after("<small id='alertLname'>Please enter a valid last name.<br></small>")
                complete = false;
            }else if($('#alertLname').length){
                $('#lname').removeClass('is-invalid');
                    $('#alertLname').remove();
                   
            }

            $('#alertPw').remove();
            var regexPw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/
            if ($('#password-field').val() == "" && regexPw.test($('#password-field').val())==false){
                $('#password-field').addClass('is-invalid');
                $('#password-field').next().after("<small id='alertPw'>Please enter a valid password.<br></small>")
                complete = false;
            }else if($('#alertPw').length){
                $('#password-field').removeClass('is-invalid');
                    $('#alertPw').remove();
                   
            }

            return complete;
    }
    </script>
        <form method="POST" action="signup.php" onSubmit="return validation(this)">
            <fieldset>
                <label>First Name: </label> <input type="text" id="fname" name="fname"> <br>
                <label>Last Name: </label> <input type="text" id="lname" name="lname"> <br>
                <label>E-mail: </label> <input type="text" id="email" name="email"> <br>
                <label class="pass">Password:</label> <input type="password" id="password-field" name="password">
                <i id="password-status" class="fa fa-eye" aria-hidden="true" onclick="showPassword()"></i>
                <br><br>
                <input class="submit" name="signup" type="submit" value="Continue">
                <br><br>


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

        if (isset($_POST['signup'])) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $pw = $_POST['password'];

            if (
                $fname == null || $lname == null || $email == null || $pw == null
                || strlen($fname) == 0 || strlen($lname) == 0 || strlen($email) == 0 || strlen($pw) == 0
            ) {
                $_SESSION["registerMessage"] = "Missing Information";
            } else {
                $conn = new mysqli($servername, $username, $password, $database);

                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = mysqli_prepare($conn, "SELECT firstname FROM users WHERE email = ?");

                $sql -> bind_param('s',$email);
                
                $result = $sql->execute();

                // if ($result == false) {
                //     die(print_r(mysqli_error($conn), true));
                // }
                $sql -> close();

                if ($result == false || $result == 1) {

                    $sql = mysqli_prepare($conn, "INSERT INTO users VALUES (?,?,?,?)");

                    $sql -> bind_param('ssss',$fname, $lname, $email, $pw);
        
                    $result1 = $sql -> execute();

                    if ($result1 === false) {
                        echo "false";
                        die(print_r(mysqli_error($conn), true));
                    }
                    else if ($result1 == true){
                        echo "true";
                        $_SESSION["registerMessage"] = null;
                        $_SESSION["authenticatedUser"] = $email;
                        header('Location: sign-up-form.php');
                    }

                    echo "incomplete";

                    $sql->close();
                    mysqli_free_result($result1);
                    mysqli_close($conn);

                } else {
                    echo($result);
                    $emailChk = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    if ($emailChk['email'] == $email){
                        $_SESSION["registerMessage"] = "Email is registered";
                        header('Location: signup.php');   
                    }
                }
                mysqli_free_result($result);


            }
        }
        ?>

        <form method="POST" action="validateLogin.php">
            <input class="submit" name='login' type="submit" value="Login">
        </form>

       

    </section>

</body>



</html>