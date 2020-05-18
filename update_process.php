 <?php
 
 $id=$_REQUEST['uid0'];  
include_once('db.php');
 
$email=$_REQUEST['uid1'];
$fname=$_REQUEST['uid2'];
$lname=$_REQUEST['uid3'];
$pwd=$_REQUEST['uid4'];
$cpwd=$_REQUEST['uid5'];
$aadhar=$_REQUEST['uid6'];

 if(empty($fname) || empty($email) || empty($pwd) || empty($cpwd) || empty($lname) || empty($aadhar)) 
{
	header("location:edit_admin_member.php?m1=Enter all fields!");
}
    
 
 else {
  echo $updatequery="UPDATE `user` SET email='$email',fname='$fname',lname='$lname',pwd='$pwd',pwdc='$cpwd',aadhar='$aadhar' WHERE id='$id'";
 
   
  $result1=mysqli_query($conn, $updatequery);
   
  if($result1)
  {
     header("location: admin_member.php?m1=successfully update!");
  }
   else{
     header("location: admin_member.php?m1=not successfully update try again later!");
   }
 }
 
?>*/