<html>
<head>
 <link rel="stylesheet" href="css/style4.css"/>
  <style>
     .a{
        margin: 0;
        padding: 0;
        font-size: 15px;
     }
  </style>
</head>
<body>
<?php 
include "user_menu.php";
?>
<div class="c5">
<div class="c6">
<?php
 
session_start();
$sno=1;
if(!isset($_SESSION['user']))
{
    header("location:index.php?msg=Login First!");
}
include_once("db.php");
echo"<br>.<br>.<br>.<br>";
echo "Welcome ".$user=$_SESSION['user'];

 //echo"<pre>"; echo $_SESSION['user'];exit;
 $ab = $_SESSION['user'];
 $sql="SELECT * FROM user where email='$ab'";
 $re=mysqli_query($conn, $sql);
 //echo $sql;
 //exit;
 $result = mysqli_fetch_assoc($re);
 echo"<pre>";
// var_dump($result);exit;
?>
<br />
 <p class="a">First Name - <?= $result['fname']?></p>
 <p class="a">Last Name - <?= $result['lname']?></p>
 <p class="c">Email - <?= $result['email']?></p>
 <p class="a">PET status- <?= $result['pet']?></p>
 <p class="a">Comment- <?= $result['comment']?></p>
</body>
 </div>
 </div>
</html>