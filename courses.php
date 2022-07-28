<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" width="device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="Cstyles.css" type="text/css">
        <link rel="stylesheet" href="animation.css">
        <link rel="stylesheet" href="./css/all.css" type="text/css">
        <link rel="stylesheet" href="./css/font-awesome.min.css" type="text/css">
        <title>SMART LEARN-Courses</title>
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
                    <img src="./images/6.jpg" class="img-reponsive wow fadeInLeft animated caption" ></div>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="menu">
                    <ul class="nav navbar-nav pull-right wow fadeInRight animated caption">
                        <li class="nav-item"><a class="nav-link" href="MainPage.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="#courses">Courses</a></li>
                        <li class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Quizs<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="drop" href="./quiz/index.html">CSE</a></li>
                                <li><a class="drop" href="./quiz/index2.html">ECE</a></li>
                                <li><a class="drop" href="./quiz/index3.html">ME</a></li>
                            </ul>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><b class="name"><?php echo $_SESSION['user']; ?></b><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="drop" href="logout.php">Logout</a></li>
                            <ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
<!------------------------------------- heading part ---------------------------------------------->
        <div class="container-fluid mainheading">
            <div class="row">
                <div class="col-lg-12">
                    <p>Courses</p>
                    <div class=" container search">
                        <div class="form-outline">
                          <input type="search" id="form1" class="form-control" placeholder="Search" />
                          <button id="search-button" type="button" class="btn btn-primary">
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!---------------------------------------------------courses part cse-------------------------------------------------->
<ul class="tags">
        <li><a href="#" class="tag">Computer Science</a></li>
       </ul>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="inner">
                            <img src="./images/DSA3.png" alt="Data Structure & Algorithm" class="img-responsive">
                            <div class="overlay">
                                <div class="text">Data Structure & Algorithm</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <i class="fas fa-caret-right"></i>
                            <button class="card-title">Data Structure & Algorithm (DSA)
                            </button>
                            <div class="card-text">
                                A data structure is a named location that can be used to store and organize data. 
                                And, an algorithm is a collection of steps to solve a particular problem. 
                                Learning data structures and algorithms allow us to write efficient and optimized computer programs.<br><br>
                                <p>
                                    <a href = "./courses/ds.php" target="_blank" class = "btn btn-success play" role = "button">
                                        Stream Now
                                     </a> 
                                     
                                     <a href = "https://www.javatpoint.com/data-structure-tutorial" target="_blank" class = "btn btn-primary download" role = "button">
                                        Theory
                                     </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="inner">
                                <img src="./images/DBMS5.png" alt="DBMS" class="img-responsive">
                                <div class="overlay">
                                        <div class="text">Data Base Management System</div>
                                    </div>
                        </div>
                        <div class="card-body">
                            <i class="fas fa-caret-right"></i>
                            <button class="card-title">Data Base Management System (DBMS)</button>
                            <div class="card-text">
                                    Database management system is a software which is used to manage the database. For example: MySQL, Oracle, etc are a very popular commercial database which is used in different applications.
                                    DBMS provides an interface to perform various operations like database creation, storing data in it, updating data, creating a table in the database and a lot more.
                                    <br><br>
                                    <p>
                                        <a href = "./courses/dbms.php"target="_blank" class = "btn btn-success play" role = "button">
                                            Stream Now
                                         </a> 
                                         
                                         <a href = "https://www.javatpoint.com/dbms-tutorial" target="_blank" class = "btn btn-primary download" role = "button">
                                            Theory
                                         </a>
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="inner">
                            <img src="./images/iwp5.jpg" alt="IWP" class="img-responsive">
                            <div class="overlay">
                                    <div class="text">Internet & Web programing</div>
                                </div>
                        </div>
                        <div class="card-body">
                            <i class="fas fa-caret-right"></i>
                            <button class="card-title">Internet & Web programing (IWP)</button>
                            <div class="card-text">
                                    The Internet is a vast network of computers, and servers, which communicate with each other. The internet connects with the whole wide world together. 
                                    Web programming refers to the writing, markup and coding involved in Web development, which includes Web content, Web client and server scripting and network security. The most common languages used for Web programming are XML, HTML, JavaScript, Perl 5 and PHP.
                                    <br><br>
                                    <p>
                                        <a href = "./courses/iwp.php" target="_blank"class = "btn btn-success play" role = "button">
                                            Stream Now
                                         </a> 
                                         
                                         <a href = "https://www.geeksforgeeks.org/internet-and-web-programming/" target="_blank" class = "btn btn-primary download" role = "button">
                                            Theory
                                         </a>
                                    </p>
                                </div>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="inner">
                                    <img src="./images/OS.jpg" alt="OS" class="img-responsive">
                                    <div class="overlay">
                                            <div class="text">Operating System</div>
                                        </div>
                            </div>
                            <div class="card-body">
                                <i class="fas fa-caret-right"></i>
                                <button class="card-title">Operating System (OS)</button>
                                <div class="card-text">
                                        Operating System (OS) is a software that acts as an interface between computer hardware components and the user. An operating system (OS) is system software that manages computer hardware, software resources, and provides common services for computer programs.<br><br>
                                        <p>
                                            <a href = "./courses/os.php" target="_blank" class = "btn btn-success play" role = "button">
                                                Stream Now
                                             </a> 
                                             
                                             <a href = "https://www.geeksforgeeks.org/operating-systems/" target="_blank" class = "btn btn-primary download" role = "button">
                                                Theory
                                             </a>
                                        </p>
                                    </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="inner">
                                <img src="./images/Python.jpg" alt="Python" class="img-responsive">
                                <div class="overlay">
                                        <div class="text">Python</div>
                                    </div>
                            </div>
                            <div class="card-body">
                                <i class="fas fa-caret-right"></i>
                                <button class="card-title">Python</button>
                                <div class="card-text">
                                        Python is an interpreted, object-oriented, high-level programming language with dynamic semantics. Its high-level built in data structures, combined with dynamic typing and dynamic binding, make it very attractive for Rapid Application Development, as well as for use as a scripting or glue language to connect existing components together. Python's simple, easy to learn syntax emphasizes readability and therefore reduces the cost of program maintenance.<br><br>
                                        <p>
                                            <a href = "./courses/python.php" target="_blank" class = "btn btn-success play" role = "button">
                                                Stream Now
                                             </a> 
                                             
                                             <a href = "https://www.javatpoint.com/python-tutorial" target="_blank" class = "btn btn-primary download" role = "button">
                                                Theory
                                             </a>
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="inner">
                                <img src="./images/blockchain.png" alt="BLOCKCHAIN" class="img-responsive">
                                <div class="overlay">
                                        <div class="text">BLOCKCHAIN</div>
                                    </div>
                            </div>
                            <div class="card-body">
                                <i class="fas fa-caret-right"></i>
                                <button class="card-title">BLOCKCHAIN</button>
                                <div class="card-text">
                                    Blockchain technology is most simply defined as a decentralized, distributed ledger that records the provenance of a digital asset. By inherent design, the data on a blockchain is unable to be modified, which makes it a legitimate disruptor for industries like payments, cybersecurity and healthcare.<br><br>
                                    <p>
                                        <a href = "./courses/blockchain.php"target="_blank" class = "btn btn-success play" role = "button">
                                            Stream Now
                                         </a> 
                                         
                                         <a href = "https://www.javatpoint.com/blockchain-tutorial" target="_blank" class = "btn btn-primary download" role = "button">
                                            Theory
                                         </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
   
    <!---------------------------------------------------courses part ece-------------------------------------------------->
        <ul class="tags">
            <li><a href="#" class="tag">Electronics & Communications</a></li>
        </ul>
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="inner">
                            <img src="./images/DLC1.png" alt="DLC" class="img-responsive">
                            <div class="overlay">
                                    <div class="text">Digital Logic & Circuit</div>
                                </div>
                        </div>
                        <div class="card-body">
                            <i class="fas fa-caret-right"></i>
                            <button class="card-title">Digital Logic & Circuit (DLC)</button>
                            <div class="card-text">
                                A digital logic circuit is defined as the one in which voltages are assumed to be having a finite number of distinct value. Types of digital logic circuits are combinational logic circuits and sequential logic circuits. These are the basic circuits used in most of the digital electronic devices like computers, calculators, mobile phones.<br><br>
                                <p>
                                    <a href = "./courses/dlc.php" target="_blank" class = "btn btn-success play" role = "button">
                                        Stream Now
                                     </a> 
                                     
                                     <a href = "https://lecturenotes.in/subject/869" target="_blank" class = "btn btn-primary download" role = "button">
                                        Theory
                                     </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="inner">
                                <img src="./images/ss.jpg" alt="Signal & System" class="img-responsive">
                                <div class="overlay">
                                        <div class="text">Signal & System</div>
                                    </div>
                        </div>
                        <div class="card-body">
                            <i class="fas fa-caret-right"></i>
                            <button class="card-title">Signal & System</button>
                            <div class="card-text">
                                A signal is a description of how one parameter varies with another parameter. A system is any process that produces an output signal in response to an input signal. Continuous systems input and output continuous signals, such as in analog electronics. Discrete systems input and output discrete signals, such as computer programs that manipulate the values stored in arrays.
                                <br><br>
                                <p>
                                    <a href = "./courses/signal.php" target="_blank" class = "btn btn-success play" role = "button">
                                        Stream Now
                                     </a> 
                                     
                                     <a href = "https://www.tutorialspoint.com/dip/signals_and_system_introduction.htm" target="_blank" class = "btn btn-primary download" role = "button">
                                        Theory
                                     </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="inner">
                            <img src="./images/EMT.png" alt="EMT" class="img-responsive">
                            <div class="overlay">
                                    <div class="text">Electromagnetic Theory</div>
                                </div>
                        </div>
                        <div class="card-body">
                            <i class="fas fa-caret-right"></i>
                            <button class="card-title">Electromagnetic Theory</button>
                            <div class="card-text">
                                Electromagnetic theory based on Maxwell's equations establishes the basic principle of electrical and electronic circuits over the entire frequency spectrum from dc to optics. It is the basis of Kirchhoff's current and voltage laws for low-frequency circuits and Snell's law of reflection in optics.
                                <br><br>
                                <p>
                                    <a href = "./courses/Electromagnetic.php" target="_blank" class = "btn btn-success play" role = "button">
                                        Stream Now
                                     </a> 
                                     
                                     <a href = "https://www.sciencedirect.com/topics/computer-science/electromagnetic-theory#:~:text=Electromagnetic%20theory%20based%20on%20Maxwell's,spectrum%20from%20dc%20to%20optics.&text=Coulomb's%20law%20for%20electric%20field,field%20govern%20the%20physical%20principles." target="_blank" class = "btn btn-primary download" role = "button">
                                        Theory
                                     </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="inner">
                            <img src="./images/FS2.png" alt="Fiber-Optic & Satellite Communications Systems" class="img-responsive">
                            <div class="overlay">
                                    <div class="text">Fiber-Optic & Satellite Communications Systems</div>
                                </div>
                        </div>
                        <div class="card-body">
                            <i class="fas fa-caret-right"></i>
                            <button class="card-title">Fiber-Optic & Satellite Communications Systems</button>
                            <div class="card-text">
                                Fiber-Optic & Satellite Communications Systems</summary>Optic Fiber communication transmits information by sending pulses of light (using laser) through an optic fiber.
                                Satellite communications use artificial satellites as relays between a transmitter and a receiver at different locations on Earth. Satellite systems allow users to bypass typical carrier offices and to broadcast information to multiple locations.
                                <br><br>
                                <p>
                                    <a href = "./courses/fiber.php" target="_blank" class = "btn btn-success play" role = "button">
                                        Stream Now
                                     </a> 
                                     
                                     <a href = "https://dealna.com/en/Article/Post/5657/Optic-fiber-VS-Satellite-communication" target="_blank" class = "btn btn-primary download" role = "button">
                                        Theory
                                     </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="inner">
                            <img src="./images/ems2.jpg" alt="M & M" class="img-responsive">
                            <div class="overlay">
                                    <div class="text">Embedded Systems</div>
                                </div>
                        </div>
                        <div class="card-body">
                            <i class="fas fa-caret-right"></i>
                            <button class="card-title">Embedded Systems</button>
                            <div class="card-text">
                                Microprocessor & Microcontroller</summary>A microcontroller is a chip optimized to control electronic devices. It is stored in a single integrated circuit which is dedicated to performing a particular task and execute one specific application.
                                A microprocessor is a controlling unit of a micro-computer wrapped inside a small chip. It performs Arithmetic Logical Unit (ALU) operations and communicates with the other devices connected with it. It is a single Integrated Circuit in which several functions are combined.
                                <br><br>
                                <p>
                                    <a href = "./courses/embeded.php" target="_blank" class = "btn btn-success play" role = "button">
                                        Stream Now
                                     </a> 
                                     
                                     <a href = "https://www.javatpoint.com/embedded-system-tutorial" target="_blank" class = "btn btn-primary download" role = "button">
                                        Theory
                                     </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="inner">
                            <img src="./images/ai1.png" alt="ARTIFICIAL INTELLIGENCE" class="img-responsive">
                            <div class="overlay">
                                    <div class="text">ARTIFICIAL INTELLIGENCE</div>
                                </div>
                        </div>
                        <div class="card-body">
                            <i class="fas fa-caret-right"></i>
                            <button class="card-title">ARTIFICIAL INTELLIGENCE(AI)</button>
                            <div class="card-text">
                                Artificial intelligence (AI) refers to the simulation of human intelligence in machines that are programmed to think like humans and mimic their actions. The term may also be applied to any machine that exhibits traits associated with a human mind such as learning and problem-solving.<br><br>
                                <p>
                                    <a href = "./courses/artificial.php" target="_blank" class = "btn btn-success play" role = "button">
                                        Stream Now
                                     </a> 
                                     
                                     <a href = "https://www.mygreatlearning.com/blog/what-is-artificial-intelligence/" target="_blank" class = "btn btn-primary download" role = "button">
                                        Theory
                                     </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!---------------------------------------------------courses part ME-------------------------------------------------->
         <ul class="tags">
            <li><a href="#" class="tag">Mechanical</a></li>
        </ul>
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="inner">
                                <img src="./images/MSE.jpg" alt="MSE" class="img-responsive">
                                <div class="overlay">
                                        <div class="text">Material Science and Engineering</div>
                                    </div>
                            </div>
                            <div class="card-body">
                                <i class="fas fa-caret-right"></i>
                                <button class="card-title">Material Science and Engineering</button>
                                <div class="card-text">
                                    Material Science and Engineering</summary>Materials Science and Engineering (MSE) combines engineering, physics and chemistry principles to solve real-world problems associated with nanotechnology, biotechnology, information technology, energy, manufacturing and other major engineering disciplines.<br><br>
                                    <p>
                                        <a href = "./courses/mse.php" target="_blank" class = "btn btn-success play" role = "button">
                                            Stream Now
                                         </a> 
                                         
                                         <a href = "https://www.mse.cornell.edu/mse" target="_blank" class = "btn btn-primary download" role = "button">
                                            Theory
                                         </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="inner">
                                    <img src="./images/FM.jpeg" alt="Fluid Mechanics" class="img-responsive">
                                    <div class="overlay">
                                            <div class="text">Fluid Mechanics</div>
                                        </div>
                            </div>
                            <div class="card-body">
                                <i class="fas fa-caret-right"></i>
                                <button class="card-title">Fluid Mechanics</button>
                                <div class="card-text">
                                    Fluid mechanics is essentially the study of fluids either in motion (fluid in dynamic mode) or at rest (fluid in stationary mode). Fluid mechanics is the study of fluid behavior (liquids, gases, blood, and plasmas) at rest and in motion. Fluid mechanics has a wide range of applications in mechanical and chemical engineering, in biological systems, and in astrophysics.
                                    <br><br>
                                    <p>
                                        <a href = "./courses/fluid.php" target="_blank" class = "btn btn-success play" role = "button">
                                            Stream Now
                                         </a> 
                                         
                                         <a href = "https://www.sciencedirect.com/topics/engineering/fluid-mechanics" target="_blank" class = "btn btn-primary download" role = "button">
                                            Theory
                                         </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="inner">
                                <img src="./images/ED.jpg" alt="ED" class="img-responsive">
                                <div class="overlay">
                                        <div class="text">Engineering Drawing</div>
                                    </div>
                            </div>
                            <div class="card-body">
                                <i class="fas fa-caret-right"></i>
                                <button class="card-title">Engineering Drawing</button>
                                <div class="card-text">
                                        An engineering drawing is a subcategory of technical drawings. The purpose is to convey all the information necessary for manufacturing a product or a part.Engineering drawings use standardised language and symbols. This makes understanding the drawings simple with little to no personal interpretation possibilities.
                                        <br><br>
                                        <p>
                                            <a href = "./courses/engineering.php" target="_blank" class = "btn btn-success play" role = "button">
                                                Stream Now
                                             </a> 
                                             
                                             <a href = "https://ocw.mit.edu/courses/mechanical-engineering/2-007-design-and-manufacturing-i-spring-2009/related-resources/drawing_and_sketching/" target="_blank" class = "btn btn-primary download" role = "button">
                                                Theory
                                             </a>
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="inner">
                            <img src="./images/EC.jpg" alt="Electrohydraulic Control Systems" class="img-responsive">
                            <div class="overlay">
                                    <div class="text">Electrohydraulic Control Systems</div>
                                </div>
                        </div>
                        <div class="card-body">
                            <i class="fas fa-caret-right"></i>
                            <button class="card-title">Electrohydraulic Control Systems (ECS)</button>
                            <div class="card-text">
                                Python is an interpreted, object-oriented, high-level programming language with dynamic semantics. Its high-level built in data structures, combined with dynamic typing and dynamic binding, make it very attractive for Rapid Application Development, as well as for use as a scripting or glue language to connect existing components together. Python's simple, easy to learn syntax emphasizes readability and therefore reduces the cost of program maintenance.<br><br>
                                <p>
                                    <a href = "./courses/Electrohydraulic.php" target="_blank" class = "btn btn-success play" role = "button">
                                        Stream Now
                                     </a> 
                                     
                                     <a href = "https://www.hydraforce.com/resources/technical-reference/introduction-to-electro-hydraulic-control-technology/" target="_blank" class = "btn btn-primary download" role = "button">
                                        Theory
                                     </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="inner">
                            <img src="./images/TD1.Gif" alt="Thermodynamics" class="img-responsive">
                            <div class="overlay">
                                    <div class="text">Thermodynamics</div>
                                </div>
                        </div>
                        <div class="card-body">
                            <i class="fas fa-caret-right"></i>
                        <button class="card-title">Thermodynamics</button>
                            <div class="card-text">
                                Thermodynamics is a branch of physics that deals with heat, work, and temperature, and their relation to energy, radiation, and physical properties of matter.<br><br>
                                <p>
                                    <a href = "./courses/thermodynamics.php" target="_blank" class = "btn btn-success play" role = "button">
                                        Stream Now
                                     </a> 
                                     
                                     <a href = "https://www.livescience.com/50776-thermodynamics.html" target="_blank" class = "btn btn-primary download" role = "button">
                                        Theory
                                     </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="inner">
                            <img src="./images/spintronic.jpg" alt="Spintronic" class="img-responsive">
                            <div class="overlay">
                                    <div class="text">Spintronics</div>
                                </div>
                        </div>
                        <div class="card-body">
                            <i class="fas fa-caret-right"></i>
                            <button class="card-title">Spintronics</button>
                                <div class="card-text">
                                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.<br><br>
                                    <p>
                                        <a href = "./courses/Spintronics.php" target="_blank" class = "btn btn-success play" role = "button">
                                            Stream Now
                                         </a> 
                                         
                                         <a href = "https://www.sciencedirect.com/science/article/pii/S0304885320302353" target="_blank" class = "btn btn-primary download" role = "button">
                                            Theory
                                         </a>
                                    </p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="foo">&copy; 2021 Cse</footer>
    <!----------------------------------------------end of front page-------------------------------------------------------->
            <script src ="./js/wow.min.js"></script>
            <script>
                    new WOW().init();
            </script>
            <script src="cardscript.js"></script>
            <script src="./js/jquery.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
    </body>
</html>