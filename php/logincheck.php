<?php
session_start();
$c=$_POST["nam"];
$a=$_POST["username"];
$b=$_POST["password"];
$con=mysqli_connect("localhost","root","","mydb");
if(!$con)
	die("server could not be connected");
$s="select * from reg where EmailId='".$a."'";
$rs=mysqli_query($con,$s);
$data=mysqli_fetch_assoc($rs);
if($data["Password"]==$b)
{
     $_SESSION["Name"]=$c;
	header("location:UserHome.php");
	
}
else
	header("location:loginpage.php?error=1");
?>