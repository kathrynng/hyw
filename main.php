<!DOCTYPE html>
<html lang="en">

<head>
    <title>HYW</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Magnific Pop-Up css file-->
    <link rel="stylesheet" href="./vendor/Magnific-Popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/main_browse.css">
</head>

<body>
    <?php
    session_start();
    ?>
    <!------------------------------- Start Header ----------------------->
    <div class="navbar-expand-lg collapse navbar-collapse nav justify-content-between d-flex flex-column flex-md-row align-items-center mb-3 bg-white border-bottom shadow-sm pd-2">
        <a href="#" class="navbar-brand">
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
    <!------------------------------- End Header ----------------------->

<!------------------------------- Main Area ----------------------->
<main class="site-main">
    
    
    <!-----------------------------------Project Area----------------------------->
   <section class="project-area">
    <div class="containter">
        <!-- <div class="project-title pb-5">
            <h1 class="text-uppercase title-h1">Recently done Projects</h1>
        </div> -->
        <div class="project-menu">
            <button type="button" class = "active" id="btn1"> All </button>
            <button type="button" data-filter =".popular"> Popular </button>
            <button type="button" data-filter =".latest"> Latest </button>
            <button type="button" data-filter =".upcoming"> Upcoming </button>
        </div>
        
        <div class="row grid">
            <div class="col-lg-4 col-md-6 col-sm-12 element-item latest">
                <div class="person-project">
                    <div class="img">
                        <a class = "test-popup-link" href="./images/main browse/1.jpg">
                        <img src="./images/main browse/1.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Lemon</h4>
                        <span class="text-secondary">Latest,Portfolio</span>
                    </div>
                </div>
            
            
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                <div class="person-project">
                    <div class="img">
                        <a class = "test-popup-link" href="./images/main browse/2.jpg">
                            <img src="./images/main browse/2.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Carbo Culture</h4>
                        <span class="text-secondary">Popular,Portfolio</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                <div class="person-project">
                    <div class="img">
                        <a class = "test-popup-link" href="./images/main browse/3.jpg">
                            <img src="./images/portfolio/3.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Lemon</h4>
                        <span class="text-secondary">Popular,Portfolio</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                <div class="person-project">
                    <div class="img">
                        <a class = "test-popup-link" href="./images/main browse/4.jpg">
                            <img src="./images/main browse/4.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Lemon</h4>
                        <span class="text-secondary">Popular,Portfolio</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 element-item latest">
                <div class="person-project">
                    <div class="img">
                        <a class = "test-popup-link" href="./images/main browse/5.jpg">
                            <img src="./images/main browse/5.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Lemon</h4>
                        <span class="text-secondary">Latest,Portfolio</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                <div class="person-project">
                    <div class="img">
                        <a class = "test-popup-link" href="./images/main browse/6.jpg">
                            <img src="./images/main browse/6.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Lemon</h4>
                        <span class="text-secondary">Upcoming,Portfolio</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                <div class="person-project">
                    <div class="img">
                        <a class = "test-popup-link" href="./images/main browse/7.jpg">
                            <img src="./images/main browse/7.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Lemon</h4>
                        <span class="text-secondary">Upcoming,Portfolio</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                <div class="person-project">
                    <div class="img">
                        <a class = "test-popup-link" href="./images/main browse/8.jpg">
                            <img src="./images/main browse/8.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Lemon</h4>
                        <span class="text-secondary">Upcoming,Portfolio</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 element-item latest">
                <div class="person-project">
                    <div class="img">
                        <a class = "test-popup-link" href="./images/main browse/9.jpg">
                            <img src="./images/main browse/9.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Lemon</h4>
                        <span class="text-secondary">Upcoming,Portfolio</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                <div class="person-project">
                    <div class="img">
                        <a class = "test-popup-link" href="./images/main browse/10.jpg">
                            <img src="./images/main browse/10.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Lemon</h4>
                        <span class="text-secondary">Upcoming,Portfolio</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                <div class="person-project">
                    <div class="img">
                        <a class = "test-popup-link" href="./images/main browse/11.jpg">
                            <img src="./images/main browse/11.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Lemon</h4>
                        <span class="text-secondary">Upcoming,Portfolio</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 element-item latest">
                <div class="person-project">
                    <div class="img">
                        <a class = "test-popup-link" href="./images/main browse/12.jpg">
                            <img src="./images/main browse/12.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Lemon</h4>
                        <span class="text-secondary">Upcoming,Portfolio</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                <div class="person-project">
                    <div class="img">
                        <a class = "test-popup-link" href="./images/main browse/13.jpg">
                            <img src="./images/main browse/13.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="title py-4">
                        <h4 class="text-uppercase">Lemon</h4>
                        <span class="text-secondary">Upcoming,Portfolio</span>
                    </div>
                </div>
            </div>
        </div>
    
    </div>


   </section>
   
   
    <!-----------------------------------End Project Area----------------------------->



</main>



<!------------------------------- Finish Main Area ----------------------->






    <!--JQuery js file-->
    <script src="./js/jquery-3.4.1.min.js"></script>

    <!-- Bootstrap js file-->
    <script src="./js/bootstrap.min.js"></script>

    <!--Isotope JS library-->
    <script src="./vendor/isotope/isotope.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!--Magnific Popup Script File-->
    <script src="./vendor/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>

    <!---Main.js-->
    <script src="./js/main.js"></script>





    <footer>

    </footer>
</body>

</html>