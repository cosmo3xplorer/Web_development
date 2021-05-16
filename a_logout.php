<?php
session_start();
unset($_SESSION['user']);
session_destroy();
echo "Logout Sucessful.";
?>
<br>
<a href="admin_log.html">Go to login</a>
