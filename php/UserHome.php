
<html>
<head>
<style>
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
  .column {
  float: left;
  width: 23.8%;
  margin-bottom: 16px;
  padding: 0 8px;
}


@media screen and (max-width: 650px) {
  .column {
    width: 50%;
    display: block;
  }
}


.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}


.container {
  padding: 0 5px;
}


.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="padding:0px; margin:0px;">

<div  class="topnav" style="background-color:blue; text-align:right; height:100px; margin:auto;">
 <img src="images/ecokart.png" align="left" style="margin:0%; margin-left:20px; margin-top:10px;" height=80 width=80>
 <input type="text" placeholder="Search..">
 <a href="loginpage.php" style="color:white; text-decoration:none; background-color:blue; border-radius:10px; padding:20px;" >Logout</a>
<a href="index.php" style="color:white; text-decoration:none; background-color:blue; border-radius:10px; padding:20px;" >HOME</a>
<a href="myinfo.php" style="color:white; text-decoration:none; background-color:blue; border-radius:10px; padding:20px;" > My Info</a>

<i class="fa fa-shopping-cart fa-1x" aria-hidden="true" style="padding:20px; color:white;" > CART</i>

 <div style="padding-right:30px; font-weight:bold;  font-size:20px;">WELCOME  

<?php
session_start();
if(isset($_SESSION["Name"]))
echo$_SESSION["Name"];
else
	header("location:loginpage.php");
?>
<br><br>
</div>
<div id="mySidenav" class="sidenav" >
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="men.php">Men</a>
  <a href="women.php">Women</a>
  <a href="children.php">Children</a>
  <a href="UserHome.php">Others</a>
</div>

<div id="main" style="text-align:left;">
  
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>

</div>
<br><br>
<br><br><br>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/mobile.jpg"  style="width:50%;" alt="mobilecover">
      <div class="container">
        <h2>MOBILE COVERS</h2>
        <p class="title">Extra 10% off</p>
         <p style="font-weight:bold; font-size:28px;"> <strike>300</strike> RS.150  50% off</p>
        <p>Durable</p>
        <p><input type="submit" class="button" value="BUY NOW" onclick="move();"></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/shoes.jpg" alt="shoes" style="width:62%">
      <div class="container">
        <h2>Shoes</h2>
        <p class="title">ADIDAS NIKE</p>
         <p style="font-weight:bold; font-size:28px;"> <strike>10000</strike> RS.5000  50% off</p>
        <p>concrete sole</p>
        <p><input type="submit" class="button" value="BUY NOW" onclick="move();"></p>
      </div>
    </div>
  </div>
<div class="column">
    <div class="card">
      <img src="images/speaker.jpg" alt="speaker" style="width:100%">
      <div class="container">
        <h2>Speaker</h2>
        <p class="title"> JBL BOAT SONY</p>
        <p style="font-weight:bold; font-size:28px;"> <strike>3000</strike> RS.1500  50% off</p>
        <p>waterproof durable</p>
        <p><input type="submit" class="button" value="BUY NOW" onclick="move();"></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="images/watch.jpeg" alt="watch" style="width:40%">
      <div class="container">
        <h2>WATCH</h2>
        <p class="title">Rolex</p>
        <p style="font-weight:bold; font-size:28px;"> <strike>80000</strike> <span id="watch">RS.40000 </span> 50% off</p>
        <p>waterproof,resistant</p>
        <p><input type="submit" class="button" value="BUY NOW" onclick="move();"></p>
      </div>
    </div>
  </div>
  <script>
  function move(){
	  window.location.assign("payment.php");
  }
  </script>
  
</body>
</html>



