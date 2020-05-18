<?php
session_start();
if(!isset($_SESSION['user']))
{
	header("location:index.php?msg=please login first!");
}
$USER=$_SESSION['user'];
echo "welcome ".$USER;

?>
<a href="logout.php">Logout!</a>