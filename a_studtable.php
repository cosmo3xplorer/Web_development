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
    include_once("authenticate.php");
    $result=mysqli_query($conn, "SELECT * FROM stud ORDER BY Reg_Num DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Records</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
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
        <a class="nav-link" href="#"><button style="background-color: #8e44ad; border-radius: 10px; box-shadow: 10px 10px dark grey;">Scholars-Info </button><span class="sr-only">(current)</span></a>
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


    <div class="p-3 mb-2 bg-light text-dark">
    <div class="container">
    <table class="table table-striped table-hover table-bordered">
        <thead class="thead-dark">
            <th>#</th>
            <th><center>Name</center></th>
            <th><center>Email</center></th>
            <th><center>Contact</center></th>
            <th><center>Stream</center></th>
            <th><center>Address</center></th>
            <th><center>Reg. Date</center></th>
            <th><center>Update</center></th>
        </thead>
        <tbody>
        <?php
        $count=1;
        while($res=mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$count."</td>";
            echo "<td><center>".$res['Name']."</center></td>";
            echo "<td><center>".$res['Email']."</center></td>";
            echo "<td><center>".$res['Contact']."</center></td>";
            echo "<td><center>".$res['Stream']."</center></td>";
            echo "<td><center>".$res['Address']."</center></td>";
            echo "<td><center>".$res['Reg_date']."</center></td>";
            echo "<td><a href=\"snedit.php?id=$res[Reg_Num]\"><button type='button' class='btn btn-info'><span class='glyphicon glyphicon-pencil'></span></button></a> || <a href=\"sndelete.php?id=$res[Reg_Num]\" onClick=\"return confirm('Are you sure you want to delete?')\"><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></button></a></td>";
            echo "</tr>";
            $count++;
        }
        ?>
        </tbody>
    </table>
    </div>
    </div>
</br></br>
<center>
<a href="a_welcome.php"><button type='button' class='btn btn-warning'><span class="glyphicon glyphicon-hand-left"> Go back</span></button></a>
</center>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
<?php
}
?>
