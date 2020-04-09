<!DOCTYPE html>
<html lang="en">
<head>
    <title>HYW</title>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/main_browse.css">
</head>
<body>
    <?php
    session_start();
    ?>
    <div class="nav justify-content-between d-flex flex-column flex-md-row align-items-center mb-3 bg-white border-bottom shadow-sm pd-2">
        <a href="#" class="navbar-brand">
            <img src="images/Title 1.png" class="main-img" alt="heyyo world">
        </a>
        <a class="sign-login" href="<?php 
            if(isset($_SESSION['authenticatedUser'])){
                if ($_SESSION['authenticatedUser'] != null){
                    $user = $_SESSION['authenticatedUser'];
                    echo 'userGridWork.html';    
                }
            }else{
                echo 'login.php';
            }
        ?>">
        <?php
            if(isset($_SESSION['authenticatedUser'])){
                if ($_SESSION['authenticatedUser'] != null){
                    $user = $_SESSION['authenticatedUser'];
                    echo 'My HYW';    
                }
            }else{
                echo 'Login';
            }
        ?>
        </a>
    </div>

<!------------------------------- Start Header ----------------------->
    <header class = "header-area">
        
        <div class="main-menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                

                <a href="main_browse.html" class="navbar-brand">
                    <img src="images/Title 1.png" class="main-img" alt="heyyo world">
                </a>

                <!-- <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button> -->
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Discover <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Freelancers</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Jobs</a>
                    </li>

                    
                    <!--Dropdown item-->
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Our Clients
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">About clients</a>
                        <a class="dropdown-item" href="#">Contact clients</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Become a client</a>
                       
                      </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                    <!-- 
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li> -->
                  </ul>
                  
                  <!-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form> -->
                </div>
              
            </nav>
        
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
            <button type="button" class = "active"> All </button>
            <button type="button" data-filter =".popular"> Popular </button>
            <button type="button" data-filter =".latest"> Latest </button>
            <button type="button" data-filter =".upcoming"> Upcoming </button>
        </div>
        
        <div class="row grid">
            <div class="col-lg-4 col-md-6 col-sm-12 element-item latest">
                <div class="person-project">
                    <div class="img">
                        <img src="./images/portfolio/1.jpg" alt="" class="img-fluid">
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
                        <img src="./images/portfolio/2.jpg" alt="" class="img-fluid">
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
                        <img src="./images/portfolio/3.jpg" alt="" class="img-fluid">
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
                        <img src="./images/portfolio/4.jpg" alt="" class="img-fluid">
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
                        <img src="./images/portfolio/5.jpg" alt="" class="img-fluid">
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
                        <img src="./images/portfolio/6.jpg" alt="" class="img-fluid">
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
                        <img src="./images/portfolio/7.jpg" alt="" class="img-fluid">
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
                        <img src="./images/portfolio/8.jpg" alt="" class="img-fluid">
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
    <script src="./vender/isotope/isotope.min.js"></script>
    <!---Main.js-->
    <script src="./js/main.js"></script>

    <footer>

    </footer>
</body>
</html>