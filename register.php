<html>
<head> <title>REGISTER PAGE</title></head>
 <link rel="stylesheet" href="css/style1.css" />
 
<body>
<?php
  include "menu.php";
  ?>
<div class="m1">
<p class="tag"><b>DO YOU LIKE PETS</b></p>
<form class="frm" name="registerForm" action="register_process.php" method="POST">
<label class="fname"><b>FIRST NAME:</b></label><input class="m2" type="text" name="n1" id="n1"/><br/>
<label class="lname"><b>LAST NAME:</b></label><input class="m2" type="text" name="n2" id="n2"/><br/>
<label class="label1"><b>EMAIL:</b></label><input class="m2" type="text" name="e1" id="e1"/><br/>
<label class="label2"><b>PASSWORD:</b></label><input class="m2" type="password" name="p1" id="p1"/><br/> 
<label class="label3"><b>CONFIRM PASSWORD:</b></label><input class="m2" type="password" name="p2" id="p2"/><br/>
<label class="label2"><b>ADHAR CARD NUMBER:</b></label><input class="m5" type="adhar" name="a1" id="a1"/><br/> 

<label class="select"><b>DO YOU OWN PETS:</b></label>

<input type="radio" name="pet"
<?php if (isset($i1) && $gender=="yes") echo "checked";?>
value="yes">yes


<input type="radio" name="pet"
<?php if (isset($i1) && $gender=="no") echo "checked";?>
value="no">no


<label class="comment"><b><br/>WHY DO YOU WANT TO ADOPT A PET?</b></label>
<textarea class="m3"   name="c1" id="c1"></textarea>


<input type="submit" value="SUBMIT"class="btn"/>


</form>
<div class="error"><marquee rotation="left" >
<?php
if(isset($_REQUEST['m1'])){
echo $_REQUEST['m1'];}
 ?></marquee>
 </div>
 </div>
</body>
</html>
