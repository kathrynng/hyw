<!DOCTYPE html>
<html lang="en">
    <head>
        <title>HYW</title>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/signup.css">
    </head>
    <body>
        <?php
            session_start();
        ?>
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm justify-content-center">
            <a href="#" class="navbar-brand">
                <img src="images/Title 1.png" class="main-img" alt="heyyo world">
            </a>
        </div>
        <!-- Form Sample -->
        <div class="container-fluid">
            <form id="signup2" method="POST" action="sign-up-form.php">
                <h2>I am a...</h2>
                <div id="selectProfession">
                    <label class="roundContainer">
                        <input type="checkbox" name="profession[]" value="V">
                        <span class="roundCheck" id="developerCheck">Developer</span>
                    </label>
                    <div class="selectProRow">
                        <label class="roundContainer">
                        <input type="checkbox" name="profession[]" value="D">
                        <span class="roundCheck" id="designerCheck">Designer</span>
                    </label>
                    <label class="roundContainer space"></label>
                    <label class="roundContainer">
                        <input type="checkbox" name="profession[]" value="R">
                        <span class="roundCheck" id="researcherCheck">Researcher</span>
                    </label>
                </div>
            </div>

                <hr>

                <h2>Pick a layout that might suit you:</h2>
                <div id="selectLayout">
                    <label class="layoutBox">
                        <input type="radio" name="layout" value="1">
                        <span class="layoutChoice">
                            <img src="images/grid.png" alt="grid layout">
                            <h3>Grid Layout</h3>
                        </span>
                    </label>
                    <label class="layoutBox">
                        <input type="radio" name="layout" value="2">
                        <span class="layoutChoice">
                            <img src="images/slide.png" alt="slide layout">
                            <h3>Slide Layout</h3>
                        </span>
                    </label>
                </div>
                   
                <hr>

                <div id="choice">
                    <input class="btn btn-lg btn-dark" name="finish-signup" id="finish-signup" type="submit" value="Preview Site">
                    <!-- <a href="userGridWork.html" id="addwork-btn" class="btn btn-lg btn-dark">Add your first work!</a> -->
                </div>
            </form>

            <?php

            if(isset($_POST['finish-signup'])){
             include 'connection.php';

             $conn = new mysqli($servername, $username, $password, $database);

             if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
                exit();
            }

                $userpro = "";
                if(!empty($_POST['profession'])){
                    foreach($_POST['profession'] as $check){
                        $userpro .= $check;
                    }
                }else{
                    $userpro = "NA";
                }

                if(isset($_POST['layout'])){
                    $layout = $_POST['layout'];
                    if($layout == null){
                        $layout = 1;
                    }
    
                }
                

    
                $sql1 = $conn->query("SELECT * FROM usersite");

                $rowsnum = mysqli_num_rows($sql1);

                $nextSiteID = $rowsnum + 2;

                $sql1 -> close();

                $sql = mysqli_prepare($conn, "INSERT INTO usersite VALUES (?,?,?,?)");
                $sql -> bind_param('sisi',$_SESSION['authenticatedUser'], $nextSiteID, $userpro, $layout);

                echo ($sql->execute());

                if ( ($sql->execute()) == false) {
                    echo('false');
                    die(print_r(mysqli_error($conn), true));
                } else if ( ($sql->execute()) == true){
                    echo('true');
                    header('Location: usersite.php');
                }

                echo "incomplete";

                $sql -> close();
                mysqli_close($conn);
            }

                
            ?>
        </div>
        
    </body>
</html>