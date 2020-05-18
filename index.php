 
 
  <?php
  include "menu.php";
  ?>
  
 <?php
 if(isset($_REQUEST['msg'])){
 echo $msg=$_REQUEST['msg']."...";}
 if(isset($_REQUEST['msg1']))
 {
	 $msg1=$_REQUEST['msg1'];
	 if($msg1=="R")
	 {
		 echo "<a href=register.php> Register!</a>";
	 }
	 
 }
 ?>
