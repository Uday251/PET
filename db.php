<?php
$conn=mysqli_connect("localhost","root","") or die("Unable to connect".mysqli_connect_error());
mysqli_select_db($conn, "acd_db") or die("Unable to select db");
?>