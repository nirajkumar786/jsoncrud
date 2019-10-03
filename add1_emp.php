<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="tutorial-boostrap-merubaha-warna">
    <meta name="author" content="ilmu-detil.blogspot.com">
    <title>Tutorial CRUD JSON DATA</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style type="text/css">
    .navbar-default {
        background-color: #3b5998;
        font-size: 18px;
        color: #ffffff;
    }
    </style>
</head>

<body>
	<nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h4>JSON CRUD</h4>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
            </div>
        </div>
    </nav>
 <div class="container">
        <div class="row">
            <div class="col-sm-5 col-sm-offset-3">
                <h3>ADD EMPLOYEE</h3>
                <form method="POST" action="emp1.php">
  <div class="form-group ">
                        <label for="inputLName">Fast name</label>
                        <input type="text" autocomplete="off" class="form-control" required="required" name="firstname" placeholder="first name">
                        <span class="help-block"></span>
                    </div>



  <div class="form-group ">
                        <label for="inputLName">last name</label>
                        <input type="text" autocomplete="off" class="form-control" required="required" name="lastname" placeholder="last name">
                        <span class="help-block"></span>
                    </div>   
                    
                    <div class="form-group">
                        <label for="inputAge">D O B</label>
                        <input type="date" required="required" autocomplete="off" class="form-control" id="inputSource" name="dob" placeholder="Date of Birth">
                        <span class="help-block"></span>
                    </div>
                    
                     <div class="form-group">
                     <label for="inputAge">Gender</label>
                       <select  autocomplete="off" class="form-control" name="gender">
                                 <option value="">Gender</option>
                                 <option value="m">Male</option>
                                 <option value="f">Female</option>
                                    </select> <span class="help-block"></span>
                   </div>
                   
                   <div class="form-group ">
                        <label for="inputLName">department</label>
                        <input type="text" autocomplete="off" class="form-control" required="required" name="department" placeholder="department">
                        <span class="help-block"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputFName"> Department Manager</label>
                        <input type="text"  autocomplete="off" class="form-control" required="required" id="inputProject" name="Manager"
                            placeholder="Department Manager Name">
                        <span class="help-block"></span>
                    </div>
                    
                     <div class="form-group">
                        <label for="inputFName">Salary</label>
                        <input type="text" autocomplete="off" class="form-control" required="required" id="inputProject" name="salary"
                            placeholder="Salary">
                        <span class="help-block"></span>
                    </div>
                    

                     <div class="form-group ">
                        <label for="inputLName">Join Date</label>
                        <input type="date" autocomplete="off" class="form-control" required="required" name="join_date" placeholder="Join Date">
                        <span class="help-block"></span>
                    </div>


                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">submit</button>
                        <a class="btn btn btn-default" href="employee1.php">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

