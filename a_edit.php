<?php
session_start();
if(!isset($_SESSION['user'])){
    echo "Your access is Unauthorized.";
 ?>
<br/>
<a href="student_log.html">Login</a>||<a href="s_signup.html">Register</a>
<?php
}
else{
?>
<?php
    include_once("authenticate.php");
    if(isset($_POST['update']))
    {
        $id=$_POST['id'];
        $name=$_POST['user'];
        $pass=$_POST['pass'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        //$email=$_POST['email'];
        if(empty($name) || empty($pass) || empty($email) || empty($phone)){

                    if(empty($name)){
                        echo "<font color='red'>Name field is empty.</font><br/>";
                    }

                     if(empty($pass)){
                        echo "<font color='red'>Password field is empty.</font><br/>";
                    }

                    if(empty($email)){
                       echo "<font color='red'>Email field is empty.</font><br/>";
                    }

                    if(empty($phone)){
                       echo "<font color='red'>Contact field is empty.</font><br/>";
                    }
                }
                else{
                    $result=mysqli_query($conn, "UPDATE admin SET User_Name='".$name."', Password='".$pass."', Email='".$email."', Contact='".$phone."' WHERE ID='".$id."'");
                    session_start();
                    $_SESSION['user']=$name;
                    $_SESSION['email']=$email;
                    $_SESSION['phone']=$phone;
                    header("Location:a_welcome.php");
                }
    }
?>
<?php
$id=$_GET['id'];
$result=mysqli_query($conn, "SELECT * FROM admin WHERE ID=$id");
while($res=mysqli_fetch_array($result))
{
    $name=$res['User_Name'];
    $pass=$res['Password'];
    $conpass=$res['Password'];
    $email=$res['Email'];
    $phone=$res['Contact'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Edit Data</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #8e44ad;">
  <a class="navbar-brand" href="front.html">Voyage Academic Association</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="d-flex justify-content-end">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="front.html">Home </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"><button style="background-color: #8e44ad; border-radius: 10px; box-shadow: 10px 10px dark grey;">Admin-Info Edit </button><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="front.html#connect">Connect</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.html">About</a>
      </li>
    </ul>
    </div>
  </div>
</nav>



<div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div id="ui">
                    <form name="f1" action="a_edit.php" method="POST" class="form-group text-center box">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <center>
                                <img src="usrimg.jpg" class="usrimg">
                                </center>
                                <br/><br/><br/>
                            </div>
                            <div class="col-lg-3"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                 <label>Username</label>
                                 <input type="text" name="user" value="<?php echo $name; ?>" class="form-control"><br>
                            </div>
                            <div class="col-lg-6">
                                <label>Email</label>
                                <input type="email" name="email" value="<?php echo $email; ?>" class="form-control"><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label>Password</label>
                                <input type="password" name="pass" value="<?php echo $pass; ?>" class="form-control"><br>
                            </div>
                             <div class="col-lg-6">
                                <label>Confirm Password</label>
                                <input type="password" name="conpass" value="<?php echo $conpass; ?>" class="form-control"><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                 <label>Contact</label>
                                 <input type="text" name="phone" value="<?php echo $phone; ?>" class="form-control"><br>
                                 <label><input type="hidden" name="id" readonly="readonly" value="<?php echo $_GET['id']; ?>"></label>
                            </div>
                            <div class="col-lg-3"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3"></div>
                             <div class="col-lg-6">
                                <center>
                                <!--<input type="submit" name="update" value="Update"><span class="glyphicon glyphicon-bookmark"></span>-->
                                <button type="submit" name="update" type="button" class="btn btn-outline-success"><span class="glyphicon glyphicon-bookmark"> Update</span></button>
                                </center>
                             </div>
                            <div class="col-lg-3"></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>

    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
<?php
}
?>
