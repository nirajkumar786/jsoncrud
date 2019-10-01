<?php
include("connection.php");

$Name = $_POST['name'];
$dob = $_POST['DOB'];
$gender = $_POST['gender'];
$department = $_POST['department'];
$dept_manager = $_POST['department_manager'];
$salary = $_POST['salary'];
$joindate = $_POST['join_date'];

$sam="INSERT INTO `emp`(`name`, `dob`, `gender`, `department`, `dept_manager`, `salary`, `join_date`) VALUES
('$Name','$dob','$gender','$department','$dept_manager','$salary','$joindate')";

$data=mysqli_query($con,$sam);
if($data)
{
	 
	 header('Location:employee.php?status=1');
}	
else 
{
	echo $sam;
	
	echo "not inserted";
}
?>
