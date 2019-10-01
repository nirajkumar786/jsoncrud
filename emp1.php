<?php
include("connection1.php");

$Firstname = $_POST['firstname'];
$Lastname = $_POST['lastname'];
$DOB = $_POST['dob'];
$Gender = $_POST['gender'];
$Department = $_POST['department'];
$Dept_manager = $_POST['manager'];
$Salary = $_POST['salary'];
$Joindate = $_POST['join_date'];

$result = "INSERT INTO `employee`(`first_name`, `last_name`, `dob`, `gender`, `join_date`) VALUES 
('$Firstname','$Lastname','$DOB','$Gender','$Joindate')";

$data=mysqli_query($con1,$result);
if($data)
{
	 
	 header('Location:employee1.php?status=1');
}	
else 
{
	echo $sam1;
	
	echo "not inserted";
}
?>




