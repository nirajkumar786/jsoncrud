<?php

$servername="localhost";
$username="root";
$password="root";
$dbname="employees";

$con1=mysqli_connect($servername,$username,$password,$dbname);



if($con1)
{
	echo "";
}
else
{
	
	die("connection failed because".mysqli_connect_error());
 }
 ?>
	

