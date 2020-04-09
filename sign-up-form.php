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
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm justify-content-center">
            <a href="#" class="navbar-brand">
                <img src="images/Title 1.png" class="main-img" alt="heyyo world">
            </a>
        </div>
        <!-- Form Sample -->
        <div class="container-fluid">
            <form id="signup2">
                <h2>I am a...</h2>
                <div id="selectProfession">
                    <label class="roundContainer">
                        <input type="checkbox" name="profession" value="developer">
                        <span class="roundCheck" id="developerCheck">Developer</span>
                    </label>
                    <div class="selectProRow">
                        <label class="roundContainer">
                        <input type="checkbox" name="profession" value="designer">
                        <span class="roundCheck" id="designerCheck">Designer</span>
                    </label>
                    <label class="roundContainer space"></label>
                    <label class="roundContainer">
                        <input type="checkbox" name="profession" value="researcher">
                        <span class="roundCheck" id="researcherCheck">Researcher</span>
                    </label>
                </div>
            </div>

                <hr>

                <h2>Pick a layout that might suit you:</h2>
                <div id="selectLayout">
                    <label class="layoutBox">
                        <input type="radio" name="layout" value="grid">
                        <span class="layoutChoice">
                            <img src="images/grid.png" alt="grid layout">
                            <h3>Grid Layout</h3>
                        </span>
                    </label>
                    <label class="layoutBox">
                        <input type="radio" name="layout" value="slide">
                        <span class="layoutChoice">
                            <img src="images/slide.png" alt="slide layout">
                            <h3>Slide Layout</h3>
                        </span>
                    </label>
                </div>
                   
                <hr>

                <div id="choice">
                    <a href="userGridWork.html" id="preview-btn" class="btn btn-lg btn-light">Preview Site</a>
                    <a href="userGridWork.html" id="addwork-btn" class="btn btn-lg btn-dark">Add your first work!</a>
                </div>
            </form>
        </div>
        
    </body>
</html>