 <html>
 <head><title>LOGIN PAGE</title>
 <link rel="stylesheet" href="css/style.css" />
 
 
 </head>
 <body>
  <?php
  include "menu.php";
  ?>
  <div class="c1">
  
 <p class="tag"> <b> LOGIN PAGE</b></p>
 <form class="frm" name="LOGIN FORM" method="POST" action="login_process.php">
 <label class="label1"><b>USER ID:</b></label><input class="in1" type="text"name="userid" id="userid"><br />
 <label class="label2"><b>PASSWORD:</b></label><input class="in2" type="password" name="pwd" id="pwd"><br />
 <input type="submit" value="LOGIN..." class="btn">
 </form>
 <a href="register.php"><b> New User!</b></a>
 <div class="error"><marquee rotation="left" >
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
 ?></marquee></div>
 </div>
 
 </body>
 </html>
 