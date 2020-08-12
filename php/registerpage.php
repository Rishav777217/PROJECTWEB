<html>
<head>

<style type="text/css">
.topnav input[type=text] {
  float:center;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  border: none;
  font-size: 17px;
}
 .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
  form{
  margin: auto;
  margin-top: 2%;
  width: 50%;
  height:50%;
  padding:5%;
	background-color:white;
   border-radius: 20px;
  }
  
   .un  {
   width : 80%;
  background-color:#C0C0C0;
   padding: 18px 22px;
   margin-left:7%;
   border:none;
   border-radius: 5px;
   }
   
   input[type=password], select {
   margin-left:7%;
   width: 80%;
   background-color:#C0C0C0; 
      border:none;
	  
	  border-radius: 5px;
   padding: 18px 22px;}
   
   input[type=submit], select {
  width: 80%;
  background-color:#000000;
  color: white;
  padding: 18px 22px;
  margin: 9px 0;
  border: none;
  border-radius: 5px;
  text-align:center;
  margin-left:7%;
  cursor:pointer;

  }

  h1{
  text-align:center;
  font-family: Arial, Helvetica, sans-serif;
  font-weight:normal;
  }

 
  
  body {
    background-image: linear-gradient(to right, cyan,#e75480);
   }

  p { 
    color:blanchedalmond; 
    text-align:middle;
   }
			
  
label{
  margin-left:7%;
border-width:thin;
}

  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="margin:0px; padding:0px;">
<div  class="topnav" style="background-color:blue; text-align:right; height:100px;">
 <img src="images/ecokart.png" align="left" style="margin:0%; margin-left:20px; margin-top:10px;" height=80 width=80>
 <input type="text" placeholder="Search..">
 
<a href="index.php" style="color:white; text-decoration:none; background-color:blue; border-radius:10px; padding:20px;" >HOME</a>


<i class="fa fa-shopping-cart fa-1x" aria-hidden="true" style="padding:20px; color:white;" > CART</i>
 
</div>
<br><br>
<form action="registercheck.php" method="post">
<div class="transbox">
<div>
<input type="text" class="un" name="name" placeholder="ENTER NAME" required>
</div><br>
<div>
<input type="text" class="un" name="username" placeholder="ENTER USERNAME" required>
</div>
<div>&nbsp;</div>
<div>
<input type="password" class="ps" name="password" placeholder="ENTER Password" required>
</div>
<div>&nbsp;</div>
<div>
<input type="password" class="ps" name="password1" placeholder="Confirm Password" required>
</div><br><br>
<div>
<input type="submit" value="sign up" >
</div>
<div>
<?php
if(isset($_GET["errorpwd"]))
	echo"<font color='red'>password and confirm password does not match</font>";
?>
</div>
</div>

</form>
</body>
</html>
