<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" width="device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="logstyle.css" type="text/css">
    <link rel="stylesheet" href="animation.css">
    <link rel="stylesheet" href="./css/all.css" type="text/css">
    <link rel="stylesheet" href="./css/font-awesome.min.css" type="text/css">
    <title>SMART LEARN-SignIn</title>
    <style>
        p
        {
            margin-top:20px;
            color:red;
            text-align:center;
            font-family: 'Poppins', sans-serif;
            font-size:12px;
            font-weight:700;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center login">
            <div class="col align-self-center">
                <h4 class="heading">Sign In</h4>
                <form class="form" action="login.php" method="post" name="LogForm" onsubmit="return ValidateLogin()">
                    <div class="form-group mt-2" id="mail">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-envelope icon"></i></span>
                            <input type="email" name="fmail" class="form-style" placeholder="Your Email">
                        </div>
                        <b><span class="formerror"> </span></b>
                    </div>
                    <div class="form-group mt-2" id="pass">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-lock icon"></i></span>
                            <input type="password" name="fpass" class="form-style" placeholder="Your Password">
                        </div>
                        <b><span class="formerror"> </span></b>
                    </div>
                    
                    <div class="btn">
                        <input type="submit" name="submit" value="submit">
                    </div>
                    <div class="pss text-center">
                        <a href="#" class="link">Forgot Your Password ?</a>
                    </div>
                    <div class="pss text-center">
                        <a href="Register.php" class="link">Create New Account ?&nbsp;&nbsp;&nbsp;SignUp</a>
                    </div>
                </form>
                <?php
                    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                    if(strpos($fullUrl,"Login=empty") == true)
                    {
                        echo "<p class='error'>All Fields are Required!!</p>";
                        exit();
                    }
                    elseif(strpos($fullUrl,"Login=InvalidEmailandPassword") == true)
                    {
                        echo "<p class='error'>You Have entered Invalid Email or Password!!</p>";
                        exit();
                    }
                ?>
            </div>
        </div>
    </div>

    <!----------------------------------------------end of front page-------------------------------------------------------->
    <script src="./js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src=""></script>
    <script src="logvalidation.js"></script>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>