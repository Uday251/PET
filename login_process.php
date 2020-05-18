<?php
include_once('db.php');
$userid=$_REQUEST['userid'];
$pass=$_REQUEST['pwd'];


 if(empty($_POST['userid']))
{
    header("location:index.php?msg=Please enter your user id");
}

 else if(empty($_POST['pwd']))
{
    header("location:index.php?msg=Please enter your password");
}



else
{
	
   $s="SELECT * FROM login where `userid`='$userid'";
    
   
	$result=mysqli_query($conn, $s);
    
    
	if($result)
	{
		$rno=mysqli_num_rows($result);
		$row=mysqli_fetch_assoc($result);
  		if($rno==1)
		{
			if($row['password']==$pass)
			{
				session_start();
				$_SESSION['user']=$userid;
				header("location:home.php");
			}
			else{
				header("location:index.php?msg=Please enter correct password or&msg1=R");
			}
			
		}
		else{
			header("location:index.php?msg=u r not allowed here!");
		}
	
	}
	else{
		header("location:index.php?msg=something went wrong! or &msg1=R");
	}
	
	
	
}

?>