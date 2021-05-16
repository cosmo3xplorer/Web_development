<?php
session_start();
unset($_SESSION['user']);
session_destroy();
echo "Logout Sucessful.";
?>
<br>
<a href="student_log.html">Go to login</a>
