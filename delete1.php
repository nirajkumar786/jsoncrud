<?php
include("connection1.php");
$id = $_GET['emp_no'];
echo $id;
$query=mysqli_query($con1,"DELETE FROM `employee`WHERE emp_no='$id'");
header('Location:employee1.php');
?>

