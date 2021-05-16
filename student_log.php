<?php
include_once("authenticate.php");
$result=mysqli_query($conn, "SELECT * FROM stud ORDER BY Reg_Num DESC");
if(isset($_POST["login"])){
    if(!empty($_POST['user']) && !empty($_POST['pass'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $query=mysqli_query($conn, "select * from stud where Name='".$user."' AND Password='".$pass."'");
        $numrows=mysqli_num_rows($query);
        if($numrows==1){
            session_start();
            $_SESSION['user']=$user;
            while($res=mysqli_fetch_array($result)){
                if($user==$res['Name']){
                    $_SESSION['regno']=$res['Reg_Num'];
                    $_SESSION['email']=$res['Email'];
                    $_SESSION['stream']=$res['Stream'];
                    $_SESSION['reg_dt']=$res['Reg_date'];
                    $_SESSION['phone']=$res['Contact'];
                    $_SESSION['add']=$res['Address'];
                }
            }
            header("Location:s_welcome.php");
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
