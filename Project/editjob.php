<?php
	include 'user_auth.php';
		
	$j_id = $_SESSION["j_id"];

	if (isset($_POST["job_save"])) {
		include_once 'Class_file/clsJobManager.php';
		$obj = new clsJob;
		$app = new clsJobManager;		
		$app->EditJob($obj, $j_id);
		$app->RetrieveJob($obj, $j_id);	
			
	}
	else {
		include_once 'Class_file/clsJobManager.php';
		$obj = new clsJob;
		$app = new clsJobManager;
		$app->RetrieveJob($obj, $j_id);
	}
?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>Edit Job</title>
	    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>	
</head>
<body>
	<div class="container-fluid">
   <div class="row">
        <div class="col" style="background-color:#9999ff; height:120px; color:white;"><br><br><h1><center>Central Requirement System</center></h1></div>

   </div></div>
<nav class="navbar-expand-sm bg-dark" style="height:40px">
  <button type="button" style="float:right;background-color:#9999ff;height:40px;color:white"><a href="logout.php">Logout</button></a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="PostNewJobs.php" style="color:white;">Post Jobs</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="JobOpen.php" style="color:white;">Jobs Open</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="resume_admin.php" style="color:white;">Resumes</a>
    </li>
   
    <li class="nav-item">
      <a class="nav-link" href="selection_admin.php" style="color:white;">Selection</a>
    </li> 
     <li class="nav-item">
      <a class="nav-link" href="applicant.php" style="color:white;">Applicants</a>
    </li> 
     <li class="nav-item">
      <a class="nav-link" href="changepassword_admin.php" style="color:white;">My Account</a>
    </li>  
       
  </ul>

</nav>
</button>	
	<div class="container">
		<div class="row">
		<div class="offset-md-3"></div>
			<div class="col-md-6">
          		<div class="card">
          			<h2 class= "card-header text-center text-white p-3" style="background-color:#9999ff;">Edit Job</h2>
            		<div class="card-body">
					<form action="EditJob.php" method="POST" class="font-weight-bold">
					<div class="form-group">
						<label for="">Job ID</label>
						<input type="text" class="form-control" value="<?php echo $obj->JobID; ?>" disabled>
					</div>

					<div class="form-group">
						<label for="">Job Title</label>
						<input type="text" class="form-control" name="jobtit" pattern="[a-zA-Z][a-zA-Z ]+[a-zA-Z]$" value="<?php echo $obj->Title; ?>"required >
					</div>

					<div class="form-group">
						<label for="">Catagory</label>
						<select class="form-control" name="Catagory">
							<option value="Select" <?php echo ($obj->Category == 'Select') ? "selected" : "" ;  ?> >Select</option>
							<option value="Software" <?php echo ($obj->Category == 'Software') ? "selected" : "" ;  ?> >Software</option>
							<option value="Hardware" <?php echo ($obj->Category == 'Hardware') ? "selected" : "" ;  ?> >Hardware</option>
						</select>
					</div>

					<div class="form-group">
						<label for="">Qualification</label>
						<select class="form-control" name="Qualification">
							<option value="Select" <?php echo ($obj->Qualification == 'Select') ?  "selected" : "" ;  ?> >Select</option>
							<option value="BA" <?php echo ($obj->Qualification == 'BA') ?  "selected" : "" ;  ?> >BA</option>
							<option value="MA" <?php echo ($obj->Qualification == 'MA') ?  "selected" : "" ;  ?> >MA</option>
							<option value="B.Sc" <?php echo ($obj->Qualification == 'B.Sc') ?  "selected" : "" ;  ?> >B.Sc</option>
							<option value="M.Sc" <?php echo ($obj->Qualification == 'M.Sc') ?  "selected" : "" ;  ?> >M.Sc</option>
							<option value="B.Tech" <?php echo ($obj->Qualification == 'B.Tech') ?  "selected" : "" ;  ?> >B.Tech</option>
							<option value="M.Tech" <?php echo ($obj->Qualification == 'M.Tech') ?  "selected" : "" ;  ?> >M.Tech</option>
							<option value="BCA" <?php echo ($obj->Qualification == 'BCA') ?  "selected" : "" ;  ?> >BCA</option>
							<option value="MCA" <?php echo ($obj->Qualification == 'MCA') ?  "selected" : "" ;  ?> >MCA</option>
							<option value="BBA" <?php echo ($obj->Qualification == 'BBA') ?  "selected" : "" ;  ?> >BBA</option>
							<option value="MBA" <?php echo ($obj->Qualification == 'MBA') ?  "selected" : "" ;  ?> >MBA</option>
						</select>
					</div>

					<div class="form-group">
						<label for="">Skills</label>
						<textarea class="form-control" rows="2" name="skill" required><?php echo $obj->Skills; ?></textarea>
					</div>

					<div class="form-group">
						<label for="">Experience</label>
						<input type="text" class="form-control" name="exper" value="<?php echo $obj->Experience; ?>"required>
					</div>

					<div class="form-group">
						<label for="">Place</label>							
						<input type="text" class="form-control" name="place" value="<?php echo $obj->Place; ?>" required>
					</div>
    				
					<div class="form-group">
						<label for="">Salary (If Applicable)</label>							
						<input type="text" class="form-control" name="salary" value="<?php echo $obj->Salary; ?>"required>
						<label class="text-primary mt-1">(if Not Applicable(NA))</label>
					</div>

					<div class="form-group">
						<label for="">Number of Vacancies</label>
						<input type="text" class="form-control" name="vacen" value="<?php echo $obj->nVacant; ?>"required>
					</div>

					<div align = "center">
						<button type="submit" class="btn btn-success" name="job_save">Save</button>
						<a href="jobdetailsadmin.php"> <button type="button" class="btn btn-danger"> Back </button></a>
					</div>				
				</form>
			</div>
		</div>
			</div>
			<div class="offset-md-3"></div>
		</div>
	</div>
</body>
</html>