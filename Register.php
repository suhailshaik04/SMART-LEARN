<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" width="device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="regstyle.css" type="text/css">
        <link rel="stylesheet" href="animation.css">
        <link rel="stylesheet" href="./css/all.css" type="text/css">
        <link rel="stylesheet" href="./css/font-awesome.min.css" type="text/css">
        <title>SMART LEARN-SignUp</title>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center signup">
                <div class="col align-self-center">
                    <h4 class="heading">Sign Up</h4>
                    <form class="form" action ="signup.php" name="myForm" onsubmit="return validateForm()" method="post">
                        <div class="form-group" id="name">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fas fa-user-circle icon"></i></span>
                                <input type="text" name="fname" class="form-style" placeholder="Your Full Name" >
                            </div>
                            <b><span class="formerror"> </span></b>     
                        </div>
                        <div class="form-group mt-2" id="phone">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fas fa-mobile-alt icon"></i></span>
                                <input type="phone" name="fphone" class="form-style" placeholder="Contact NO.">
                            </div>
                            <b><span class="formerror"> </span></b>
                        </div>
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
                        <div class="form-group mt-2" id="cpass">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fas fa-lock icon"></i></span>
                                <input type="password" name="fcpass" class="form-style" placeholder="Confirm Password">
                            </div>
                            <b><span class="formerror"> </span></b>
                        </div>
                        <div class="btn">
                        <input type="submit" name="submit" value="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>

         <!----------------------------------------------end of front page-------------------------------------------------------->
         <script src ="./js/wow.min.js"></script>
         <script>
                 new WOW().init();
         </script>
         <script src="validation.js"></script>
         <script src="./js/jquery.min.js"></script>
     <script src="./js/bootstrap.min.js"></script>
 </body>
</html>