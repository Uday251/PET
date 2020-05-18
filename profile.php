 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>MEMBER</title></head>
 <meta name="viewport" content="width=divice-width,initial-scale=1.0"/>

 </head>
 <style type="text/css">
 body{
    background-image:url(a2.jpg)   ;
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
 }
    ul{
    list-style-type:none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:  #405580;
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
    background-color:whitesmoke ;
}

.c6{
    box-shadow:  2px 2px 2px 2px white;
     margin-left: 2px;
     display: block;
     width: 740px;
     height: 250px;
     background-color: white;
     border-radius: 10px ;
border: 2px   #804040 ;
}
.c5{
     margin-left: 90px;
    margin-top: 40px;
    padding-top: 10px;
text-align: center;
background-color:smokewhite;
display: block;
width: 1200px;
height: 450px;
box-shadow:  2px 2px 2px 2px #ABABAB;
border-radius: 10px ;
border: 2px   #804040 ;
font-family:bold;
font-size:140%;
 
}
.main{
     
    box-shadow:  2px 2px 2px 2px #ABABAB;
border-radius: 10px ;
border: 2px   #804040 ;
font-family:bold;
font-size:170%;
width: 640px;
height: 520px;
 background: white;
 font-family: monospace;
 color:!important;
 text-align: center;
 margin-left: 320px; 
 padding-left: 50px;
}
.pic{
    image-resolution: normal;
    border-radius:50%;
   margin-left: 4px;
}	
	
 </style>
 <?php
 include ('user_menu.php');
 ?>
 <div class="main">
<?php
session_start();

if(!isset($_SESSION['user']))
{
    header("location:index.php?msg=Login First!");
}else{
    
  include_once 'db.php';   
      $user=$_SESSION['user'];
        $query1=  "SELECT * FROM user where `email`="."'$user'";
        
       $res1=mysql_query($query1) or die(mysql_error);
   
       if($res1) 
       {
        $row=mysql_fetch_array($res1);
         
        
               echo '<table>';
               echo '<h2 style=color:#dc1435; font-family:monospace; >USER PROFILE:</h2>';

               echo'<hr/>';
			 
                echo '<tr><th>Name:</th><td>'.$row["fname"].'</td></tr>';
               
                echo '<tr><th>Name:</th><td>'.$row["lname"].'</td></tr>';
                echo '<tr><th>Email:</th><td>'.$row["email"].'</td></tr>';
                  
				 
                
                echo'<hr/>';
                echo '</table>';
                echo'<h3  style=color:#dc1435; font-family:monospace;> if any correction is required then inform the admin! </h3>';
                 
        
 
 }
      
   } 
  
?>
</div>
</html>