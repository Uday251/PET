<?php
include_once("db.php");
 
$fname=$_REQUEST['n1'];
 
$lname=$_REQUEST['n2'];
$email=$_REQUEST['e1'];
$pwd=$_REQUEST['p1'];
$cpwd=$_REQUEST['p2'];
$pet=$_REQUEST['pet'];
$comment=$_REQUEST['c1'];
$aadhar=$_REQUEST['a1'];
 
 if(empty($_POST['n1']))
{
    header("location:register.php?m1=Please enter your first name");
}

else if(empty($_POST['n2']))
{
    header("location:register.php?m1=Please enter your last name");
}



else if(empty($_POST['e1']))
{
    header("location:register.php?m1=Enter correct email");
}

else if($pwd!=$cpwd)
{
	header("location:register.php?m1=Password and Confirm Password does not matched!");
}
else if(empty($_POST['p1']) || (preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $_POST["p1"]) === 0))
 {
header("location:register.php?m1=Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit");
}

else if(empty($_POST['a1']) || (preg_match("/^.*(?=.{12,})(?=.*[0-13]).*$/", $_POST["a1"]) === 0))
{
    header("location:register.php?m1=Please enter your valid aadhar card number");
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
			 $s="INSERT INTO `user` (`email`,`fname`, `lname`, `pwd`, `pwdc`,`pet`,`aadhar`, `comment`) VALUES ('$email', '$fname', '$lname', '$pwd', '$cpwd','$pet','$aadhar','$comment')";

	   $s2="INSERT INTO `login` (`userid`, `password`, `role`) VALUES ('$email', '$pwd', 'USER')";
       $result=mysqli_query($conn, $s);
     
       	$result2=mysqli_query($conn, $s2);
        if($result2 && $result){
		header("location:index.php?msg=Registered Successfully, Please Login!");
        }
        else{
           header("location:index.php?msg=Registered Successfully, Please Login!"); 
        }
		
	}
	
			
		}
	}
	
	
	
	ss
	
	
	
	
	

?>