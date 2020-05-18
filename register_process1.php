<?php
include_once("db.php");
$fname=$_REQUEST['n1'];
$lname=$_REQUEST['n2'];
$email=$_REQUEST['e1'];
$pwd=$_REQUEST['p1'];
$cpwd=$_REQUEST['p2'];
$pet=$_REQUEST['pet'];
$comment=$_REQUEST['c1'];
if(empty($fname) || empty($lname) || empty($email) || empty($pwd) || empty($cpwd) || empty($comment))
{
	header("location:register.php?m1=Enter all fields!");
}
else if($pwd!=$cpwd)
{
	header("location:register.php?m1=Password and Confirm Password does not matched!");
}
else
{
	$s1="SELECT * FROM user where `email`="."'$email'";
	$result1=mysqli_query($conn, $s1);
	if($result1)
	{
		$rno=mysqli_num_rows($result1);
		if($rno>0)
		{
			header("location:register.php?m1=Email already Registered!");
		}
		else{
			$s="INSERT INTO `user` (`email`, `fname`,`lname`, `pwd`, `pwdc`,`pet`,`comment`) VALUES ('$email', '$fname', '$lname', '$pwd', '$cpwd','$pet','$comment')";
	$result=mysqli_query($conn, $s);
	if($result)
	{
		header("location:index.php?msg=Registered Successfully, Please Login!");
		
	}
	else{
		 header("location:index.php?msg=try again,plz login again!");
	}
			
		}
	}
	
	
	
	
	
	
	
	
	
}
?>