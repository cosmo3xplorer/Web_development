<?php
include_once("authenticate.php");
$result=mysqli_query($conn, "SELECT * FROM admin ORDER BY ID DESC");
include("authenticate.php");
if(isset($_POST["login"])){
    if(!empty($_POST['user']) && !empty($_POST['pass'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $query=mysqli_query($conn, "select * from admin where User_Name='".$user."' AND Password='".$pass."'");
        $numrows=mysqli_num_rows($query);
        if($numrows==1){
            session_start();
            $_SESSION['user']=$user;
            while($res=mysqli_fetch_array($result)){
                if($user==$res['User_Name']){
                    $_SESSION['id']=$res['ID'];
                    $_SESSION['email']=$res['Email'];
                    $_SESSION['phone']=$res['Contact'];
                    $_SESSION['rgdt']=$res['Reg_date'];
                }
            }
            header("Location:a_welcome.php");
        }
        else{
            echo "Invalid Record.";
        }
    }
    else{
        echo "<script> alert('Some fields might be empty!'); </script>";
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    }
}
?>
