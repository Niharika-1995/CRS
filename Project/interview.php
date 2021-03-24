<?php
	include 'user_auth.php';
	//include 'jobdetailsadmin.php';
//session_start();
//print_r($_SESSION);
		
	 $j_id = $_SESSION["j_id"];
	
	//echo $_SESSION["j_id"];

	if (isset($_POST["interview_save"])) {
		
		include_once 'Class_file/clsInterviewManager.php';
		$obj = new clsInterview;
		$app = new clsInterviewManager;
		$app->addInterview($obj);
		//$app->RetrieveInterview($obj, $j_id);
	}
	else {
		
		include_once 'Class_file/clsInterviewManager.php';
		$obj = new clsInterview;
		$app = new clsInterviewManager;
		$app->RetrieveInterview($obj, $j_id);
	}
?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>Interview</title>
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
      <a class="nav-link" href="Applicant.php" style="color:white;">Applicants</a>
    </li> 
     <li class="nav-item">
      <a class="nav-link" href="changepassword_admin.php" style="color:white;">My Account</a>
    </li>  
       
  </ul>

</nav>
</button>

	<!-- The Logout Modal -->
	<!--<?php //include 'LogoutModal.php'; ?>
	<?php //include 'ModalResumeSearch.php'; ?>
	<?php //include 'ModalAppSearch.php'; include 'ModalSelection.php'; include 'ModalSendMsg.php'; ?>-->

	<div class="container">
		<div class="row">
		<div class="offset-md-3"></div>
			<div class="col-md-6">
          		<div class="card">
          			<h2 class= "card-header text-center text-white p-3" style="background-color:#9999ff">Interview Schedule</h2>
            		<div class="card-body">
					<form action="Interview.php" method="POST" class="font-weight-bold">
					<div class="form-group">
						<label for="">Job ID</label>
						<input type="text" class="form-control" name="job_id" value="<?php echo $_SESSION["j_id"]; ?>"disabled>
					</div>

					<div class="form-group">
						<label for="">Interview Date</label>
						<input type="date" class="form-control" name="i_date" value="<?php echo $obj->Idate; ?>">
					</div>

					<div class="form-group">
						<label for="">Reporting Time</label>
						<input type="time" class="form-control" name="i_time" value="<?php echo $obj->Itime; ?>">
					</div>

					<div class="form-group">
						<label for="">Place</label>							
						<input type="text" class="form-control" name="i_place" placeholder="Enter Place" value="<?php echo $obj->Iplace; ?>">
					</div>

					<div class="form-group">
						<label for="address">Brief Note</label>
						<textarea class="form-control" rows="2" name="i_note" placeholder="Enter Brief Note" value="<?php echo $obj->Inote; ?>"></textarea>
						<p class="text-center small p-2 text-primary">( Small Description about this Interview )</p>
					</div>

					<div class="text-center">
						<button type="submit" class="btn btn-success" name="interview_save">Save</button>
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