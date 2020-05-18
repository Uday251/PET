 
<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
<head><title>Admin-update</title></head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"/>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

 
 <style type="text/css">
    ul{
    list-style-type:none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #dc143c;
    width: 1340px;
    }
li{
    float:left;
    }
    
li a{
    display: block;
    padding: 14px 16px;
    text-decoration:none;
    text-align: center;
    color: white;
    font-family: cursive;
    }
li a:hover{
    background-color:blue ;
}
 /*CSS style sheet*/

#main-wrapper{
	width:500px;
	margin: 0 auto;
	background:white;
	padding:20px;
        
	border-radius:10px;
	border: 2px solid #95a5a6;
}
.avatar{
	
	width:150px;
	text-align:center;
}

.myform{
	width:450px;
	margin:0 auto;
}

.inputvalues{
	width:430px;
	margin:5px auto;
	padding:2px;
}
.radiobtns{
	margin: 10px;
}
.selectbox{
margin: 10px;	
}

#login_btn{
	margin-top:10px;
	background-color:#27ae60;
	padding:5px;
	color:white;
	width:100%;
	text-align:center;
	font-size:18px;
	font-weight:bold;
}
#register_btn{
	margin-bottom:20px;
	margin-top:10px;
	background-color:#3498db;
	padding:5px;
	color:white;
	width:100%;
	text-align:center;
	font-size:18px;
	font-weight:bold;
}

#signup_btn{
	margin-top:10px;
	background-color:#3498db;
	padding:5px;
	color:white;
	width:100%;
	text-align:center;
	font-size:18px;
	font-weight:bold;
}

#back_btn{
	margin-top:10px;
	background-color:#e74c3c;
	padding:5px;
	color:white;
	width:30%;
	text-align:center;
	font-size:18px;
	font-weight:bold;
}
#logout_btn{
	margin-top:10px;
	background-color:#c0392b;
	padding:5px;
	color:white;
	width:100%;
	text-align:center;
	font-size:18px;
	font-weight:bold;
	margin-bottom:20px;
}
.w{
	
	margin-left:520px;
	font-size:156%;
	margin-top:20px;
}
 
 
</style> 
<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("imglink").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>
  
<body>
 <?php
session_start();
if(!isset($_SESSION['user']))
{
    header("location:index.php?msg=Login First!");
}
include_once('db.php');
$id=$_REQUEST['did'];
?>
<?php
 include "admin_menu.php";
 ?>

<div class="m1">
<?php

echo "<label class=w>Welcome id--> ".$user=$_SESSION['user']."</label>";

  $sno=1;
  
 $sql="SELECT * FROM user where id=".$id;
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
if($result){
    echo "<form action=update_process.php method=POST >";
    echo "<tr>";
    echo "<label class=label2 type=hidden>Id:</label><input class=m2 type=hidden name=uid0 value=".$row['id']."><br/>";
    
    echo "<label class=label2>EMAIL:</label><input class=m2 type=text name=uid1 value=".$row['email']."><br/>";
    echo "<label class=label3>FNAME:</label><input class=m3 type=text name=uid2 value=".$row['fname']."><br/>";
    echo "<label class=label3>LNAME:</label><input class=m3 type=text name=uid3 value=".$row['lname']."><br/>";
    echo "<label class=label4>PASSWORD:</label><input class=m4 type=password name=uid4 value=".$row['pwd']."><br/>";
    echo "<label class=label6>CONFIRM PASSWORD:</label><input class=m5 type=password  name=uid5 value=".$row['pwdc']."><br/>";
    echo "<label class=label12>AADHAR NO:</label><input class=m12 type=numeric name=uid6 value=".$row['aadhar']."><br/>";
    echo "<btn><input type=submit value=Update class=b13></btn>";
    echo "</tr>";
    echo "</form>";
} 
?>
  <?php
if(isset($_REQUEST['m1'])){
echo $_REQUEST['m1'];}

 ?> 
</body>
 </div>
</html>