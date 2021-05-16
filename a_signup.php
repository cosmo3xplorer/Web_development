<?php
include("authenticate.php");
static $ap="871A";
if(isset($_POST["save"])){
   if(!empty($_POST['user']) && !empty($_POST['pass']) && !empty($_POST['conpass']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['a_pass'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $conpass=$_POST['conpass'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $a_pass=$_POST['a_pass'];
        if($a_pass!=$ap){
            echo "<script> alert('Admin Pass Unmatched'); </script>";
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        }
        else{
            if($pass==$conpass){
            $query=mysqli_query($conn, "select * from admin where User_Name='".$user."'");
            $numrows=mysqli_num_rows($query);
            if($numrows==0){
                $sql="insert into admin(User_Name, Password, Email, Contact) values('$user','$pass','$email','$phone')";
                $result=mysqli_query($conn, $sql);
                if($result){
                    session_start();
                    $_SESSION['user']=$user;
                    $_SESSION['email']=$email;
                    $_SESSION['phone']=$phone;
                    $query1=mysqli_query($conn, "select * from admin where User_Name='".$user."'");
                    $res1=mysqli_fetch_array($query1);
                    $_SESSION['rgdt']=$res1['Reg_date'];
                    $_SESSION['id']=$res1['ID'];
                    header("Location:a_welcome.php");
                }
                else{
                    echo "Faliure!";
                }
            }
            else{
                echo "</br>User_Name already exist.";
            }
        }
        else{
            echo "<br/><a href='javascript:self.history.back();'>Confirm Password!</a>";
        }
        }
    }
    else{
            echo "<script> alert('Some fields might be empty!'); </script>";
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    }
}
?>
