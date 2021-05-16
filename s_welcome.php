<?php
session_start();
if(!isset($_SESSION['user'])){
    echo "Your access is Unauthorized.";
 ?>
<br/>
<a href="student_log.php">Login</a>||<a href="s_signup.php">Register</a>
<?php
}
else{
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Authorized</title>
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
        <a class="nav-link" href="#"><button style="background-color: #8e44ad; border-radius: 10px; box-shadow: 10px 10px dark grey;">Scholar-Info </button><span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Choose Actions
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="s_edit.php?id=<?php echo htmlentities($_SESSION['regno']); ?>">Edit Your Record</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="s_logout.php">Logout</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="s_logout.php">Logout</a>
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
                    <form name="f1" method="POST" class="form-group text-center box">
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
                                 <label>Name</label>
                                 <input type="text" value="<?php echo $_SESSION['user']; ?>" readonly="readonly"></br>
                            </div>
                            <div class="col-lg-6">
                                <label>Email</label>
                                <input type="email" value="<?php echo $_SESSION['email']; ?>" readonly="readonly"></br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                 <label>Contact</label>
                                 <input type="number" value="<?php echo $_SESSION['phone']; ?>" readonly="readonly"></br>
                            </div>
                            <div class="col-lg-6">
                                <label>Stream</label>
                                <input type="text" value="<?php echo $_SESSION['stream']; ?>" readonly="readonly"></br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <label>Address</label>
                                <input type="address" value="<?php echo $_SESSION['add']; ?>" readonly="readonly"></br>
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
<?php } ?>

