<?php
session_start();
if(!isset($_SESSION['user'])){
    echo "Your access is Unauthorized.";
?>
<br/>
<a href="admin_log.php">Login</a>||<a href="a_signup.php">Signup</a>
<?php
}
else{
include("authenticate.php");
$id=$_GET['id'];
$result=mysqli_query($conn, "DELETE FROM admin WHERE ID='$id'");
header("Location:admin_log.html");
}
?>
