<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>

    <!-- Bootstrap css-->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!--font awesome icons-->
    <link rel="stylesheet" href="./css/all.min.css">
    <!--Magnific Pop-Up css file-->
    <link rel="stylesheet" href="./vendor/Magnific-Popup/dist/magnific-popup.css">
    <!--Owl Carousel css file-->
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="./css/main_browse.css">
</head>
<body>
<!------------------------------- Start Header ----------------------->
<header class = "header-area">
    <div class="navbar-expand-lg collapse navbar-collapse nav justify-content-between d-flex flex-column flex-md-row align-items-center mb-3 bg-white border-bottom shadow-sm pd-2">
        <a href="main.php" class="navbar-brand">
            <img src="images/Title 1.png" class="main-img" alt="heyyo world">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="main.php">Discover <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="freelancers.php">Freelancers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="clients.php">Clients</a>
                </li>
            </ul>
        </div>
        <ul>
            <li class="nav-item
            <?php
            if (isset($_SESSION['authenticatedUser'])) {
                if ($_SESSION['authenticatedUser'] != null) {
                    $user = $_SESSION['authenticatedUser'];
                    echo ' dropdown';
                }
            }
            ?>">
                <?php
                if (isset($_SESSION['authenticatedUser'])) {
                    if ($_SESSION['authenticatedUser'] != null) {
                        $user = $_SESSION['authenticatedUser'];
                        echo '
                    <a class=" sign-login nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      My HYW
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">My Profile</a> ';
                        if (isset($_SESSION['adminLogin'])) {
                            if ($_SESSION['adminLogin'] != null) {
                                echo ' 
                            <a class="dropdown-item" href="admin.php">Admin Corner</a>';
                            } else {
                                echo ' 
                        <a class="dropdown-item" href="#">My Clients</a>';
                            }
                        } else {
                            echo ' 
                        <a class="dropdown-item" href="#">My Clients</a>';
                        }
                        echo '<div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Log Out</a>
                   
                  </div>
                  ';
                    }
                } else
                    echo '<a class="sign-login" href="login.php">Login</a>';

                ?>

            </li>
        </ul>

    </div>
    </header>
<!------------------------------- End Header ----------------------->

<!------------------------------- Main Area ----------------------->
<main class="site-main py-5">
    
<section class = "client-area ">
    
        <div class="container ">
            <div class="row text-center">
            <div class="col-12">
                <div class="about-title my-auto">
                <h1 class = "text-uppercase title-h1"> About clients</h1>
                <p class="para p-1">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam eaque ducimus hic dicta provident placeat eius officiis. Error, asperiores inventore!
                </p>
                </div>
            </div>
            </div>
        </div>

        <div class="container carousel py-lg-5">
            <div class="owl-carousel owl-theme">
                <div class="client row">
                    <div class="col-lg-4 col-md-12 client-img">
                    <img src="./images/client5.jpg" alt="client1" class="img-fluid">
                    </div>
                    <div class="col-lg-8 col-md-12 about-client">
                    <h4 class="text-uppercase">John Martin</h4>
                    <p class="para">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos dolore fuga totam voluptates, architecto sed!</p>
                    </div>
                
                </div>
                <div class="client row">
                    <div class="col-lg-4 col-md-12 client-img">
                    <img src="./images/client2.jpg" alt="client1" class="img-fluid">
                    </div>
                    <div class="col-lg-8 col-md-12 about-client">
                    <h4 class="text-uppercase">Mac Hill</h4>
                    <p class="para">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos dolore fuga totam voluptates, architecto sed!</p>
                    </div>
                
                </div>
                
                <div class="client row">
                    <div class="col-lg-4 col-md-12 client-img">
                    <img src="./images/client3.jpg" alt="client1" class="img-fluid">
                    </div>
                    <div class="col-lg-8 col-md-12 about-client">
                    <h4 class="text-uppercase">david louis</h4>
                    <p class="para">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos dolore fuga totam voluptates, architecto sed!</p>
                    </div>
                
                </div>

                <div class="client row">
                    <div class="col-lg-4 col-md-12 client-img">
                    <img src="./images/client4.jpg" alt="client1" class="img-fluid">
                    </div>
                    <div class="col-lg-8 col-md-12 about-client">
                    <h4 class="text-uppercase">Claude Dauphin</h4>
                    <p class="para">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos dolore fuga totam voluptates, architecto sed!</p>
                    </div>
                
                </div>
            </div>
        </div>
    
</section>

</main>



<!------------------------------- Finish Main Area ----------------------->




    <!--JQuery js file-->
    <script src="./js/jquery-3.4.1.min.js"></script>

    <!-- Bootstrap js file-->
    <script src="./js/bootstrap.min.js"></script>

    <!--Isotope JS library-->
    <script src="./vendor/isotope/isotope.min.js"></script>

    <!--Magnific Popup Script File-->
    <script src="./vendor/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>

    <!--Owl Carousel JS file-->
    <script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>
    <!---Main.js-->
    <script src="./js/main.js"></script>

    <footer>

    </footer>
</body>
</html>