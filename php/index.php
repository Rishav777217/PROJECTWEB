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
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="padding:0px; margin:0px;">

<div  class="topnav" style="background-color:blue; text-align:right; height:100px;">
 <img src="images/ecokart.png" align="left" style="margin:0%;margin-left:20px; margin-top:10px;" height=80 width=80>
 <input type="text" placeholder="Search..">
 <a href="loginpage.php" style="color:white; text-decoration:none; background-color:blue; border-radius:10px; padding:20px;" >Login</a>
<a href="index.php" style="color:white; text-decoration:none; background-color:blue; border-radius:10px; padding:20px;" >HOME</a>


<a href="myinfo.php" style="color:white; text-decoration:none; background-color:blue; border-radius:10px; padding:20px;" > My Info</a>
<i class="fa fa-shopping-cart fa-1x" aria-hidden="true" style="padding:20px; color:white;" > CART</i>
 
</div>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/mobile.jpg"  style="width:50%">
      <div class="container">
        <h2>MOBILE COVERS</h2>
        <p class="title">Extra 10% off</p>
        <p>Best Selling</p>
        <p>Durable</p>
        <p><input type="submit" class="button " onclick="alert('login is required');" value="BUY"></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/shoes.jpg" alt="Mike" style="width:62%">
      <div class="container">
        <h2>Shoes</h2>
        <p class="title">50% off</p>
        <p>Adidas,Nike,Canvas</p>
        <p>concrete sole</p>
        <p><input type="submit" class="button " onclick="alert('login is required');" value="BUY"></p>
      </div>
    </div>
  </div>
<div class="column">
    <div class="card">
      <img src="images/speaker.jpg" alt="Mike" style="width:107%">
      <div class="container">
        <h2>Speaker</h2>
        <p class="title">50% off</p>
        <p>JBL BOAT SONY</p>
        <p>waterproof durable</p>
        <p><input type="submit" class="button " onclick="alert('login is required');" value="BUY"></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="images/watch.jpeg" alt="John" style="width:40%">
      <div class="container">
        <h2>WATCH</h2>
        <p class="title">20%off</p>
        <p>Rolex,titan</p>
        <p>waterproof,resistant</p>
        <p><input type="submit" class="button " onclick="alert('login is required');" value="BUY"></p>
      </div>
    </div>
  </div>
  
  
</div>
</div>
</body>
</html>