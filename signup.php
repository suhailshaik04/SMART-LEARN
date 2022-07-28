<?php
$servername = 'localhost';
$user = 'root';
$pass ='';
$db = 'SMART_LEARN';
$conn = mysqli_connect($servername,$user,$pass,$db);
//echo "Connection Successful";
//conn = new mysqli('localhost',$user, $pass, $db) or die("ubale to connect");
//echo"great work";

if(isset($_POST['submit']))
{
    $NAME = $_POST['fname'];
    $PHONE = $_POST['fphone'];
    $EMAIL = $_POST['fmail'];
    $PASSWORD = $_POST['fpass'];
    $CPASSWORD = $_POST['fcpass'];
    $register_query = "INSERT INTO SIGNUP (FULLNAME, CONTACT, EMAIL, FPASSWORD, CPASSWORD) VALUES ('$NAME','$PHONE','$EMAIL','$PASSWORD','$CPASSWORD')";
    try
    {
        $register_result = mysqli_query($conn,$register_query);
        if($register_result)
        {
            if(mysqli_affected_rows($conn)>0)
            {
                echo "successfull";
                header("location:LoginPage.php");
            }
            else
            {
                echo "error";
            }
        }
    }catch(Exception $ex){
            echo("error".$ex->getMessage());
    }
}

?>