<html>
<head>
 <link rel="stylesheet" href="css/style4.css"/>
 
</head>
<body>
<?php 
include "admin_menu.php";
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
echo"<br>.<br>.<br>";
echo "Welcome ".$user=$_SESSION['user'];
 
$sql="SELECT * FROM user";
$result=mysqli_query($conn, $sql);
if($result){
    echo "<table border=1>";
    echo "<tr>
       <td>S.No.</td>
       <td>Email</td>
       
       <td>Name</td>
       <td>Password</td>
       <td>Email</td>
0       <td>Adhar no</td>
      <td>Action </td>   
      <td>Action </td>
       
       
       
       
       </tr>";
    while($row=mysqli_fetch_assoc($result))
    {
      echo "<tr>
       <td>".$sno."</td>
       
       
       <td>".$row['fname'] ."</td>
       <td>".$row['lname'] ."</td>
         <td>".$row['pwd'] ."</td>
        <td>".$row['email'] ."</td>
           <td>".$row['aadhar'] ."</td>  
           
   
       <td><a href=edit_admin_member.php?did=".$row['id']."&email=".$row['email'].">Edit</a></td> 
       <td><a href=drop.php?did=".$row['id']."&email=".$row['email'].">Drop</a></td>
       
       </tr>";
       $sno=$sno+1; 
    }
    echo "</table>";
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
 </div>
 </div>
</html>