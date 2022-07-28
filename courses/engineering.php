<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" width="device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="videostyles.css" type="text/css">
        <link rel="stylesheet" href="../animation.css">
        <link rel="stylesheet" href="../css/all.css" type="text/css">
        <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
        <title>SMART LEARN - Engineering Drawing</title>
        <style>
            b
            {
                color:aqua;
                font-family:cursive;    
                font-size: 18px;
                font-style: italic;
                font-weight:700;
                transition: .8s all ease;
            }
        </style>
    </head>
    <body data-spy="scroll" data-target="#mainmenu" data-offset="100">
        <nav class="navbar" id="mainmenu">
            <div class="container-fluid">
                <div class="navbar-header">
                    <div class="navbar-brand">
                    <img src="../images/6.jpg" class="img-reponsive wow fadeInLeft animated caption" ></div>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="menu">
                    <ul class="nav navbar-nav pull-right wow fadeInRight animated caption">
                        <li class="nav-item"><a class="nav-link" href="../HomePage1.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="../courses.php">Courses</a></li>
                        <li class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Quizs<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="drop" href="../quiz/index.html">CSE</a></li>
                                <li><a class="drop" href="../quiz/index2.html">ECE</a></li>
                                <li><a class="drop" href="../quiz/index3.html">ME</a></li>
                            </ul>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><b class="name"><?php echo $_SESSION['user']; ?></b><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="drop" href="../logout.php">Logout</a></li>
                            <ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
<!------------------------------------------videos start---------------------------------------------------------------------------------------------> 
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-4 videos wow fadeInLeft animated caption">
                    <div class = "thumbnail">
                        <img src = "../images/ed1.jpg" alt = "Generic placeholder thumbnail">
                     </div>
                     <div class = "caption">
                        <h3>Multiview projection</h3>
                        <p>
                           <a href = "#" class = "btn btn-success play" role = "button">
                              Play
                           </a> 
                           
                           <a href = "#" class = "btn btn-primary download" role = "button">
                              Download
                           </a>
                        </p>
                     </div>
                </div>
                <div class="col-md-4 videos wow fadeInDown animated caption">
                    <div class = "thumbnail">
                        <img src = "../images/ED.jpg" alt = "Generic placeholder thumbnail">
                     </div>
                     <div class = "caption">
                        <h3>Auxiliary views</h3>
                        <p>
                            <a href = "#" class = "btn btn-success play" role = "button">
                                Play
                             </a> 
                             
                             <a href = "#" class = "btn btn-primary download" role = "button">
                                Download
                             </a>
                        </p>
                     </div>
                </div>
                <div class="col-md-4 videos wow fadeInRight animated caption">
                    <div class = "thumbnail">
                        <img src = "../images/ed2.jpg" alt = "Generic placeholder thumbnail">
                     </div>
                     <div class = "caption">
                        <h3>Isometric projection</h3>
                        <p>
                            <a href = "#" class = "btn btn-success play" role = "button">
                                Play
                             </a> 
                             
                             <a href = "#" class = "btn btn-primary download" role = "button">
                                Download
                             </a>
                        </p>
                     </div>   
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 videos wow fadeInLeft animated caption">
                    <div class = "thumbnail">
                        <img src = "../images/ED.jpg" alt = "Generic placeholder thumbnail">
                     </div>
                     <div class = "caption">
                        <h3>Oblique projection</h3>
                        <p>
                            <a href = "#" class = "btn btn-success play" role = "button">
                                Play
                             </a> 
                             
                             <a href = "#" class = "btn btn-primary download" role = "button">
                                Download
                             </a>
                        </p>
                     </div>   
                </div>
                <div class="col-md-4 videos  wow fadeInDown animated caption">
                    <div class = "thumbnail">
                        <img src = "../images/ed2.jpg" alt = "Generic placeholder thumbnail">
                     </div>
                     <div class = "caption">
                        <h3>Perspective projection</h3>
                        <p>
                            <a href = "#" class = "btn btn-success play" role = "button">
                                Play
                             </a> 
                             
                             <a href = "#" class = "btn btn-primary download" role = "button">
                                Download
                             </a>
                        </p>
                     </div> 
                </div>
                <div class="col-md-4 videos wow fadeInRight animated caption">
                    <div class = "thumbnail">
                        <img src = "../images/ed1.jpg" alt = "Generic placeholder thumbnail">
                     </div>
                     <div class = "caption">
                        <h3>Section Views</h3>
                        <p>
                            <a href = "#" class = "btn btn-success play" role = "button">
                                Play
                             </a> 
                             
                             <a href = "#" class = "btn btn-primary download" role = "button">
                                Download
                             </a>
                        </p>
                     </div> 
                </div>
            </div>
        </div>


    <footer class="foo">&copy; 2021 Cse</footer>
    <!------------------------------------------End of page--------------------------------------------------------------------------------------------->
        <script src ="./js/wow.min.js"></script>
        <script>
                new WOW().init();
        </script>
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>