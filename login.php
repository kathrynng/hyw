<!DOCTYPE html>
<html lang="en">

<head>
    <title>login-form</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open Sans' >
    <link rel='stylesheet' href="css/main.css">
    <link rel='stylesheet' href="css/login.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    
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
        <h3>Login</h3>
        <script>
        function validation(form){
            $('#alert').remove();
            var regexEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if(regexEmail.test(form.email.value)==false){
                $('#email').addClass('is-invalid');
                $('#email').next().after("<small id='alert'>Please enter a valid email.<br><br></small>")
                return false;
            }
            else if($('#alert').length){
                $('#email').removeClass('is-invalid');
                $('#alert').remove();
            }
            return true;
        }
    </script>
        <form name="login-form" method="POST" action="validateLogin.php" onSubmit="return validation(this)" id="login-form">
            <fieldset>
                <label>E-mail: </label> <input type="text" id = "email" name= "email"> <br>
                <label class = "pass">Password:</label> <input type="password" id = "password-field" name= "password">
                <i id  = "password-status" class="fa fa-eye" aria-hidden="true" onclick="showPassword()"></i>
                <br><br>
                <input class ="submit" name="login" type="submit" value="Continue">
                <br><br>
                <input class ="submit" name="signup" type="submit" value="Sign Up">

                
                <script>
                function showPassword()
                {
                var passwordInput = document.getElementById('password-field');
                var passStatus = document.getElementById('password-status');
                
                if (passwordInput.type == 'password'){
                    passwordInput.type='text';
                    passStatus.className='fa fa-eye-slash';
                    
                }
                else{
                    passwordInput.type='password';
                    passStatus.className='fa fa-eye';
                }
                }
                </script>
                
            </fieldset>
        </form>
    </section>
    
    

</body>



</html>