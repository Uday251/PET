<html>

<head><title>Admin PAGE</title>
 <link rel="stylesheet" href="css/style4.css" />
 
 
 </head>
 
<body>
 
<?php
    
  
session_start();
if(!isset($_SESSION['user']))
{
    header("location:index.php?msg=Login First!");
}
include_once("db.php");
$user=$_SESSION['user'];
$sql="SELECT * FROM login where `userid`="."'$user'";

$result=mysqli_query($conn, $sql);
if($result){
    $row=mysqli_fetch_assoc($result);
    if($row['role']=="ADMIN"){
        //Admin Code
       
      include "admin_menu.php";
      echo"<br>.<br>.<br>.<br>";
      echo "Welcome ".$user;
      
        
        
    }
    else{
        //user code
        include "user_menu.php";
        echo"<br>.<br>.<br>.<br>";
        echo "Welcome ".$user;
        
    }
    
}

?>
<?php
 if(isset($_REQUEST['msg'])){
 echo $msg=$_REQUEST['msg']."...";}
 if(isset($_REQUEST['msg1']))
 {
	 $msg1=$_REQUEST['msg1'];
	 if($msg1=="R")
	 {
		 echo "<a href=admin_register.php> Register!</a>";
	 }
	 
 }
 ?>
</body>
</html>
