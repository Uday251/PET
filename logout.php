<?php
session_start();
unset($_SESSION['user']);
session_destroy();
header("location:index.php?msg=Successfully Logged Out! or&msg1=R");

?>