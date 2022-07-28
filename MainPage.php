<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" width="device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="styles.css" type="text/css">
        <link rel="stylesheet" href="animation.css">
        <link rel="stylesheet" href="./css/all.css" type="text/css">
        <link rel="stylesheet" href="./css/font-awesome.min.css" type="text/css">
        <title>SMART LEARN</title>
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
            .navbar .dropdown-menu {
                background-color: #3193de;
            }

            .navbar .dropdown-item {
                text-decoration: none; color: #fff;
            }

            .navbar .dropdown-item:hover,
            .navbar .dropdown-item:focus {
                text-decoration: none; color: #ff0000;
                background-color:#3193de;
            }
        </style>
    </head>
    <body data-spy="scroll" data-target="#mainmenu" data-offset="100">
        <nav class="navbar" id="mainmenu">
            <div class="container-fluid">
                <div class="navbar-header">
                    <div class="navbar-brand">
                    <img src="./images/6.jpg" class="img-rounded wow fadeInLeft animated caption" ></div>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="menu">
                    <ul class="nav navbar-nav pull-right wow fadeInRight animated caption">
                        <li class="nav-item"><a class="nav-link" href="#MyCarousel">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="courses.php">Courses</a></li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Quizs<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./quiz/index.html">CSE</a></li>
                                <li><a class="dropdown-item" href="./quiz/index2.html">ECE</a></li>
                                <li><a class="dropdown-item" href="./quiz/index3.html">ME</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#faq">FAQ's</a></li>
                        <li class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><b class="name"><?php echo $_SESSION['user']; ?></b><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            <ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
<!------------------------------------- carousel part---------------------------------------------->
        <div class="carousel slide" data-ride="carousel" id="MyCarousel">
            <!---indicators-->
            <ol class="carousel-indicators">
                <li class="active" data-target="#MyCarousel" data-slide-to="0"></li>
                <li data-target="#MyCarousel" data-slide-to="1"></li>
                <li data-target="#MyCarousel" data-slide-to="2"></li>
            </ol>
            <!---slides-->
            <div class="carousel-inner maincarousel">
                <div class="item active">
                    <img src="./images/bg4.jpg" class="img-reponsive">
                    <div class="carousel-caption">
                        <h3 class="wow fadeInUp animated caption" >SMART LEARN</h3><hr id="line">
                        <p class="wow fadeInDown animated caption" >"LET'S LEARN AND GROW TOGETHER"</p>
                        <h2 class="wow slideInLeft animated caption" >TAKE THE BEST COURSES</h2>
                        <p class="wow slideInRight animated caption"><span class="line2">LEARN WITH US</span></p>
                    </div>
                </div>
                <div class="item">
                    <img src="./images/45.jpg" class="img-reponsive">
                    <div class="carousel-caption">
                        <h3 class="cap2 wow slideInDown animated caption" >“The beautiful thing about learning is nobody can take it away from you.”</h3>
                        <p class="pull-right wow slideInRight animated caption" >- B.B. King</p>
                    </div>
                    
                </div>
                <div class="item">
                    <img src="./images/7.jpg" class="img-reponsive img3">
                    <div class="carousel-caption">
                        <h3 class="cap3 wow slideInUp animated caption">“When you Educate One Person You can Change a Life, When you Educate Many you can Change the World.”</h3>
                        <p class="pull-right c3 wow slideInLeft animated caption" >- Shai Reshef</p>
                    </div>
                </div>
            </div>
            <!--prev, next slides-->
            <a class="left carousel-control" href="#MyCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#MyCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
        </div>
    <!------------------------------------- carousel part ends---------------------------------------------->
    <!-----------------------------------about project------------------------------------------------------------>
    
    <div class="container-fluid" id="about">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="wow bounceInUp animated caption">SMART LEARN</h2>
                <div class="container">
                    <p class="description wow zoomIn animated caption">
                        SMART LEARN is a learning site it is made for students to give them a clearer idea on what to study and how to study. 
                        Main objective of the system is to avail a good and comfortable E-learning experience to the students.
                        The system allows students to sign up have an account to get personal monitoring on ongoing courses and suggestions on what courses might help them grow.
                        There are Review and FAQs for students facing doubts regarding the platform.
                        The system consists a number of courses for the student to learn from.
                        The system also provides a platform to the students to connect to expert teachers regarding their doubts without any fear. 
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!---------------------counter page-------------------->

    <div class="container-fluid counter-page">
            <div class="row">
                <div class="col-lg-3 countdown wow slideInLeft animated caption" >
                    <i class="fas fa-user-graduate wow bounceInUp animated caption" ></i>
                    <h1><span class="counter">34567</span></h1>
                    <p class="cap">STUDENTS</p>
                </div>
                <div class="col-lg-3 countdown wow slideInUp animated caption" >
                    <i class="fas fa-chess-knight wow fadeInUp animated caption"></i>
                    <h1><span class="counter">23454</span></h1>
                    <p class="cap">INSTRUCTORS</p>
                </div>
                <div class="col-lg-3 countdown wow slideInDown animated caption">
                    <i class="fas fa-clipboard-list wow fadeInDown animated caption"></i>
                    <h1><span class="counter">648</span></h1>
                    <p class="cap">COURSES</p>
                </div>
                <div class="col-lg-3 countdown wow slideInRight animated caption">
                    <i class="fas fa-trophy wow bounceInDown animated caption"></i>
                    <h1><span class="counter">56768</span></h1>
                    <p class="cap">WINNERS</p>
                </div>
            </div>
        </div>
    
   <!-----------------------------------latest courses------------------------------------------------------------>
   <div class="container-fluid latest" id="courses">
        <div class="mheading wow rotateInDownRight animated caption">
            <h2>Latest Technologies</h2>
        </div>
        <div class="container">
                <div class="row justify-content-center">
                 <div class="col-md-4 maincontainer wow flipInX animated caption">
                     <div class="flipcard">
                         <div class="card-front">
                             <img src="./images/AI.jpg" alt="ARTIFICIAL INTELLIGENCE">
                         </div>
                         <div class="card-back">
                             <div class="card-content">
                                 <h5 class="fh">ARTIFICIAL INTELLIGENCE(AI)</h5>
                                 <hr>
                                 <p class="ft">Artificial intelligence (AI) refers to the simulation of human intelligence in machines that are programmed to think like humans and mimic their actions. The term may also be applied to any machine that exhibits traits associated with a human mind such as learning and problem-solving.</p>
                                 <a href="#" class="click">READ MORE</a>
                             </div>
                         </div>
                        
                     </div>
                 </div>
                 <div class="col-md-4 maincontainer wow flipInX animated caption">
                     <div class="flipcard">
                        <div class="card-front">
                             <img src="./images/blockchain.png" alt="BLOCKCHAIN">
                         </div>
                         <div class="card-back">
                             <div class="card-content">
                                 <h5 class="fh">BLOCKCHAIN</h5>
                                 <hr>
                                 <p class="ft">Blockchain technology is most simply defined as a decentralized, distributed ledger that records the provenance of a digital asset. By inherent design, the data on a blockchain is unable to be modified, which makes it a legitimate disruptor for industries like payments, cybersecurity and healthcare.</p>
                                 <a href="#" class="click">READ MORE</a>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4 maincontainer wow flipInX animated caption">
                     <div class="flipcard">
                         <div class="card-front">
                             <img src="./images/cybersecurity.jpg"alt="CYBER SECURITY">
                         </div>
                         <div class="card-back">
                             <div class="card-content">
                                 <h5 class="fh">CYBER SECURITY</h5>
                                 <hr>
                                 <p class="ft">Computer security, cybersecurity or information technology security (IT security) is the protection of computer systems and networks from information disclosure, theft of or damage to their hardware, software, or electronic data, as well as from the disruption or misdirection of the services they provide.</p>
                                 <a href="#" class="click">READ MORE</a>
                             </div>
                         </div>
                     </div>
                 </div>
                </div>
            </div>
    </div>   
        <!--------------------------------------------------------computer science completed-------------------------------------->
        <div class="container-fluid second-block">
                <div class="row justify-content-center">
                    <div class="col-md-4 wow lightSpeedIn animated caption">
                        <div class="card" style="width: 32rem;">
                            <div class="inner">
                                <img src="./images/alexa.jpg" class="card-img-top" alt="Voice UI">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Voice UI</h5>
                                <p class="card-text">Voice User Interface (UI) and voice commerce will be one of the fastest-growing web development trends 2021. This is because of the rise in the usage of smart speakers and voice recognition technology in devices like Amazon Alexa and similar devices built by Microsoft, Google, Apple, and other tech giants.
                                </p>
                                <a href="#" class="click">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow lightSpeedIn animated caption">
                        <div class="card" style="width: 32rem;">
                            <div class="inner">
                                <img src="./images/swift.jpg" class="card-img-top" alt="swift">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">SWIFT</h5>
                                <p class="card-text">Swift first announced by Apple in 2014, and a new programming language used to develop iOS and macOS applications.
                                        Swift has been optimized for performance and built from the ground up to match the realities of modern iOS development.Not only does iOS run on every iPhone and iPad, but it’s also the basis for other operating systems such as watchOS and tvOS.</p>
                                <a href="#" class="click">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow lightSpeedIn animated caption">
                        <div class="card" style="width: 32rem;">
                            <div class="inner">
                                <img src="./images/js1.png" class="card-img-top" alt="JAVASCRIPT">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">JAVA SCRIPT</h5>
                                <p class="card-text">JavaScript is a scripting or programming language that allows you to implement complex features on web pages every time a web page does more than just sit there and display static information for you to look at displaying timely content updates, interactive maps, animated 2D/3D graphics, scrolling video jukeboxes, etc.</p>
                                <a href="#" class="click">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
        <!---------------------------------------ECE completed---------------------------------------------------->
        <div class="container">
                <div class="row justify-content-center">
                 <div class="col-md-4 wow flipInY animated caption">
                     <div class="box">
                         <img src="./images/ar.jpg" alt="Augmented reality" class="img-responsive">
                         <div class="content">
                             <h5 class="card-heading">Augmented reality</h5>
                             <p class="card-text">Augmented reality (AR) is an enhanced version of the real physical world that is achieved through the use of digital visual elements, sound, or other sensory stimuli delivered via technology. It is a growing trend among companies involved in mobile computing and business applications in particular.</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4 wow flipInY animated caption">
                     <div class="box">
                         <img src="./images/spintronic.jpg" alt="Spintronic" class="img-responsive">
                         <div class="content">
                             <h5 class="card-heading">Spintronics</h5>
                             <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4 wow flipInY animated caption">
                     <div class="box">
                         <img src="./images/edge.jpg" alt="EDGE-COMPUTING" class="img-responsive">
                         <div class="content">
                             <h5 class="card-heading">EDGE-COMPUTING</h5>
                             <p class="card-text">Spintronics, also known as spin electronics, is the study of the intrinsic spin of the electron and its associated magnetic moment, in addition to its fundamental electronic charge, in solid-state devices.</p>
                         </div>
                     </div>
                 </div>
                </div>
            </div>
    <!-------------------------------------------end of technologies------------------------------------------------------>
     <!----------------------------------------------------testimonials---------------------------------------------------------------->
    <div class="container-fluid testimonial">
    <div class="carousel slide" id="testcarousel" data-interval="2000" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="row">
                    <div class="col-md-4 col-lg-4 testcar">
                        <img src="./images/MANDANA.jpg" class="img-circle testimg">
                        <div class="carousel-caption">
                            <h4>Truly Amazing</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 testcar">
                        <img src="./images/ram.jpg" class="img-circle testimg">
                        <div class="carousel-caption">
                            <h4>Best eLearning Company Ever</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 testcar">
                        <img src="./images/ramalakshmi.jpg" class="img-circle testimg">
                        <div class="carousel-caption">
                            <h4>You Guys Rock</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!----------------------first row------------------------>
            <div class="item">
                <div class="row">
                    <div class="col-md-4 col-lg-4 testcar">
                        <img src="./images/sangeetha.jpg" class="img-circle testimg">
                        <div class="carousel-caption">
                            <h4>Responsive</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 testcar">
                        <img src="./images/aarhan.jpg" class="img-circle testimg">
                        <div class="carousel-caption">
                            <h4>Affordable</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 testcar">
                        <img src="./images/swetha hassen.jpeg" class="img-circle testimg">
                        <div class="carousel-caption">
                            <h4>Trustworthy</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <a href="#testcarousel" class="carousel-control left" data-slide="prev">
                        <span class="glyphicon glyphicon-chervon-left"></span>
                </a>
                <a href="#testcarousel" class="carousel-control right" data-slide="next">
                        <span class="glyphicon glyphicon-chervon-right"></span>
                </a>
        </div>
     </div>

    <!------------------------------------------contact us------------------------------------------------------>
    <div class="container-fluid">
        <div class="row contact-us" id="contact">
            <div class="col-lg-6">
                <h1 class="contact-head wow rotateIn animated caption">CONTACT-US</h1>
                <p><i class="fas fa-map-marker-alt"></i>    VIT, Vellore Institute of Technology, Tamilnadu</p>
                <p><i class="fas fa-phone">    +919492481023</i></p>
                <div class="social-media wow rollIn animated caption">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-google"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                </div>
            </div>
            <div class="col-lg-6 post-query" id="faq">
                <h1 class="contact-head wow rotateIn animated caption">POST YOUR QUERY</h1>
                <div class="form-group">
                        <i class="fas fa-user wow rollIn animated caption"></i>
                        <input type="text" id="name" class="form-control" placeholder="Enter Full Name"/>
                    </div>
                    <div class="form-group">
                            <i class="far fa-envelope wow rollIn animated caption"></i>
                        <input type="email" id="mail" class="form-control" placeholder="example123@gmail.com"/>
                    </div>
                    <div class="form-group">
                            <i class="fas fa-phone wow rollIn animated caption"></i>
                        <input type="text" id="phone" class="form-control" placeholder="+91" maxlength="10"/>
                    </div>
                    <div class="form-group">
                            <i class="fas fa-comment-alt wow rollIn animated caption"></i>
                        <textarea id="msg" cols="48"></textarea>
                    </div>
                    <button type="button" class="btn btn-primary">POST</button>
                
                
             </div>
        </div>
    </div>
    <!----------------------------------------------end of front page-------------------------------------------------------->
            <script src ="./js/wow.min.js"></script>
            <script>
                    new WOW().init();
            </script>
   
            <script src="./js/jquery.min.js"></script>
            <script src="./js/jquery.waypoints.min.js"></script>
            <script src="./js/jquery.counterup.min.js"></script>
            <script>
            jQuery(document).ready(function(){
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });
            });
    
            </script>
    
        
        <script src="./js/bootstrap.min.js"></script>
    </body>
</html>