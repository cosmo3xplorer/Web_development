<?php
include("authenticate.php");
if(isset($_POST["save"])){
    if(!empty($_POST['user']) && !empty($_POST['pass']) && !empty($_POST['conpass']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['stream']) && !empty($_POST['add'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $conpass=$_POST['conpass'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $stream=$_POST['stream'];
        $add=$_POST['add'];
        if($pass==$conpass){
            $query=mysqli_query($conn, "select * from stud where Email='".$email."'");
            $numrows=mysqli_num_rows($query);
            if($numrows==0){
                $sql="insert into stud(Name, Password, Email, Contact, Stream, Address) values('$user','$pass','$email','$phone','$stream','$add')";
                $result=mysqli_query($conn, $sql);
                if($result){
                    session_start();
                    $_SESSION['user']=$user;
                    $_SESSION['email']=$email;
                    $_SESSION['stream']=$stream;
                    $_SESSION['phone']=$phone;
                    $_SESSION['add']=$add;
                    $query1=mysqli_query($conn, "select * from stud where Name='".$user."'");
                    $res1=mysqli_fetch_array($query1);
                    $_SESSION['reg_dt']=$res1['Reg_date'];
                    $_SESSION['regno']=$res1['Reg_Num'];
                    header("Location:s_welcome.php");
                }
                else{
                    echo "Faliure!";
                }
            }
            else{
                echo "Email already exist.";
            }
        }
        else{
            echo "<br/><a href='javascript:self.history.back();'>Confirm Password!</a>";
        }
    }
    else{
         echo "<script> alert('Some fields might be empty!'); </script>";
         echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    }
}
?>
