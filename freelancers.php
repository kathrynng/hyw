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
<main class="site-main">
    <!-----------------------------------Banner Area----------------------------->
    <section class="site-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <h3 class = "title-text">Hey</h3>
                    <h1 class="title-text text-uppercase">I am </h1>
                    <h4 class="title-text text-uppercase">a freelancer swoftware developper</h4>
                    <div class = "site-buttons">
                        <div class="d-flex flex-row flex-wrap">
                            <button type="button" class="btn button primary-button mr-4 text-uppercase">Hire me</button>
                            <button type="button" class= "btn button secondary-button text-uppercase">Get Resume</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 banner-img">
                    <img src="./images/software_developper.jpg" alt="banner-img" class="img-fluid">
                </div>

                
            </div>
        </div>
    </section>
    <!-----------------------------------End Banner Area----------------------------->


    <!----------------------------------- About Area----------------------------->
   
    <section class="about-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-image">
                        <img src="./images/businessman.png" alt="About me" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 about-title">
                    <h2 class="text-uppercase pt-5">
                        <span>Let me </span>
                        <span>Introduce </span>
                        <span>Myself </span>
                    </h2>
                    <div class="paragraph py-4 w-75">
                        <p class="paragraph">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis architecto exercitationem et asperiores qui, assumenda corrupti inventore ipsa quo officia!
                        </p>
                        <p class="paragraph">
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
                            The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. 
                        </p>
                        <button type="button" class="btn button primary-button text-uppercase">Download CV</button>
                    </div>

                </div>

            </div>
        </div>
    </section>
    
    <!-----------------------------------Project Area----------------------------->
   <section class="project-area">
    <div class="containter">
        <div class="project-title pb-5">
            <h1 class="text-uppercase title-h1">Recently done Projects</h1>
        </div>
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
                        <a class = "test-popup-link" href="./images/portfolio/1.jpg">
                        <img src="./images/portfolio/1.jpg" alt="" class="img-fluid">
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
                        <a class = "test-popup-link" href="./images/portfolio/2.jpg">
                            <img src="./images/portfolio/2.jpg" alt="" class="img-fluid">
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
                        <a class = "test-popup-link" href="./images/portfolio/3.jpg">
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
                        <a class = "test-popup-link" href="./images/portfolio/4.jpg">
                            <img src="./images/portfolio/4.jpg" alt="" class="img-fluid">
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
                        <a class = "test-popup-link" href="./images/portfolio/5.jpg">
                            <img src="./images/portfolio/5.jpg" alt="" class="img-fluid">
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
                        <a class = "test-popup-link" href="./images/portfolio/6.jpg">
                            <img src="./images/portfolio/6.jpg" alt="" class="img-fluid">
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
                        <a class = "test-popup-link" href="./images/portfolio/7.jpg">
                            <img src="./images/portfolio/7.jpg" alt="" class="img-fluid">
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
                        <a class = "test-popup-link" href="./images/portfolio/8.jpg">
                            <img src="./images/portfolio/8.jpg" alt="" class="img-fluid">
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

    <!--Magnific Popup Script File-->
    <script src="./vendor/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>

    <!---Main.js-->
    <script src="./js/main.js"></script>

    <footer>

    </footer>
</body>
</html>