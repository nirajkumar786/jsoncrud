<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="author" content="ilmu-detil.blogspot.com">
 <title>Tutorial CRUD  JSON DATA</title>
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
 <link rel="stylesheet" href="assets/css/ilmudetil.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
 <div class="container">
  <div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="index1.php">
   JSON CRUD</a>
  </div>
  <div class="navbar-collapse collapse">
   <ul class="nav navbar-nav navbar-left">
<li class=""><a href="index1.php">Home</a></li>
<li class="clr1 active"><a href="employee1.php">Employees</a></li>
   </ul>
  </div>
 </div>
</nav>
</br></br></br></br>
<div class="container">
 <div class="jumbotron">
  <h3>Welcome to the employee details.</h3>      
       
 </div>
</div>
<div class="container">
 <div class="btn-toolbar">
  <a class="btn btn-primary" href="add1_emp.php"><i class="icon-plus"></i> Add new employee</a>
  
  
  
  <div class="btn-group"> </div>
 </div>
</div>
<br>
<br>
<?php
include("connection1.php");
//$status=$_GET['status'];
error_reporting(0);
$result = mysqli_query($con1,"SELECT employee.*, salary.salary from employee inner join salary on salary.emp_no= employee.emp_no");


?>
<div class="container">
 <div class ="row">
  <div class="col-md-11">
	  <?php
if (mysqli_num_rows($result) > 0) {
?>
   <table class="table table-striped table-bordered table-hover">
 <?php if($status) echo "Data inserted successfully."; ?>
</td></tr>
   <tr>	<th>first name</th>
		<th>last name</th>
		<th>D O B</th>
		<th>Gender</th>
		<th>department</th>
		<th>Department Manager</th>
		<th>Salary</th>
		<th>Join Date</th>
		<th colspan="2">Action</th>
		</tr>
		<style>
			td{
				padding:10px;
			}.
			
		</style>
		<?php
		while($row = mysqli_fetch_array($result)) {
?>
	<tr>
    <td><?php echo $row["first_name"]; ?></td>
    <td><?php echo $row["last_name"]; ?></td>
    <td><?php echo $row["dob"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><?php echo $row["department"]; ?></td>
    <td><?php echo $row["department Manager"]; ?></td>
    <td><?php echo $row["salary"]; ?></td>
    <td><?php echo $row["join_date"]?></td>
    
       <td>
     <a class="btn btn-xs btn-primary" href="update1.php?emp_no=<?php echo $row['emp_no'] ?>">Edit</a>


      <a class="btn btn-xs btn-danger" href="delete1.php?emp_no=<?php echo $row['emp_no'] ?>">Delete</a>
     </td>
</tr>
<?php
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
</div></div></div>

<?php include("footer.php");?>
 </body>
</html>

