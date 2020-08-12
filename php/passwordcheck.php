<?php
$a=$_POST["emailid"];
$b=$_POST["pass"];


$con=mysqli_connect("localhost","root","","mydb");
if(!$con)
die("Server not found");
$sql="update reg set Password='".$b."' where EmailId='".$a."'";


$check=mysqli_query($con,$sql);

if($check!=0)
echo "password has been changed";
else
echo "not modified sucessfully";
?>