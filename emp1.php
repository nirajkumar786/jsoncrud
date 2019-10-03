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

$con1->query($result)or die("error");
$data = $con1->insert_id;
//echo $data;
//echo $result;

//echo $query;die;

if($data)
{
  $query1 = "INSERT INTO `salary`(`emp_no`, `salary`) VALUES ('$data','$Salary')";
 
}
//echo $query1;
$con1->query($query1) or die($con1->error);
header('Location:employee1.php');


?>




