<?php

$name=$_POST["name"];
$email=$_POST["username"];
$pwd=$_POST["password"];
$cpwd=$_POST["password1"];

$con=mysqli_connect("localhost","root","","mydb");
if(!$con)
	die("server could not be connected");

if($pwd==$cpwd)
{
	$s="insert into reg(EmailId,Password,Name)values('".$email."','".$pwd."','".$name."')";
	$rs=mysqli_query($con,$s);
	if($rs!=0)
	{
header("location:loginpage.php");
	}
else
{
echo"unable to register";
}
}
else

	header("location:registerpage.php?$errorpwd=1");

?>