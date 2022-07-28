 <?php
 session_start();
$servername = 'localhost';
$user = 'root';
$pass ='';
$db = 'SMART_LEARN';
$conn = mysqli_connect($servername,$user,$pass,$db);
echo "Connection Successful";
$email = $_POST['fmail'];
$password = $_POST['fpass'];
$sql = "SELECT * FROM SIGNUP WHERE EMAIL = '$email' AND FPASSWORD = '$password'";
$data = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($data);
if($row['EMAIL'] == $email && $row['FPASSWORD'] == $password)
{
     $_SESSION['user'] = $row['FULLNAME'] ;
    header("location:courses.php");
}
else
{
    header("location:LoginPage.php?Login=InvalidEmailandPassword");
}
?>