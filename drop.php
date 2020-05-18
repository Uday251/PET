<?php
session_start();
include_once('db.php');
$id=$_REQUEST['did'];
$email=$_REQUEST['email'];
$sql="DELETE FROM `user` WHERE `user`.`id`=".$id;
$sql1="DELETE FROM `login` WHERE `userid`="."'".$email."'";
$result1=mysqli_query($conn, $sql1);
$result=mysqli_query($conn, $sql);
if($result && $result1)
  {
    header("location:admin_member.php");
  }
  
  ?>