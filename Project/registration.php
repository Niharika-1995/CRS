<?php
	//include'user_auth.php';
	session_start();

 //  	if(isset($_GET["id"])) {
 //    	$_SESSION['job_id'] = $_GET["id"];
	// }	
	if (isset($_POST["reg"])) {
		include 'Class_file/clsApplicantManager.php';
		$obj = new clsApplicant;
		$app = new clsApplicantManager;
		// $j_id = $_SESSION["job_id"];
		$app->PostNewApplicant($obj);
	}
?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title> Registration Form</title>

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>


</head>
<body >
	<div class="container-fluid">
   <div class="row">
        <div class="col" style="background-color:#9999ff; height:120px; color:white;"><br><br><h1><center>Central Requirement System</center></h1></div>

   </div></div>
   
<nav class="navbar-expand-sm bg-dark" style="height:40px">
  
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="Index.php" style="color:white;">Back</a>
    </li>
    </ul>
</nav>
<div class="container-fluid">
  <div class="row">
        <div class="col" style="background-color:#9999ff; height:30px; color:white;"></div>
  </div>
  <br>
	<div class="container-fluid">
		<div class="row">
		<div class="offset-md-3"></div>
			<div class="col-md-6">
          		<div class="card" style="width:500px; height:1650px;">
          			<h2 class= "card-header bg-light text-center text-Black p-3">Registration Form</h2>
            		<div class="card-body">
					<form action="Registration.php" method="POST" class="font-weight-bold">
					<div class="form-group">
						<label for="uname">User Name</label>							
						<input type="text" class="form-control" name="uname" placeholder="Enter User Name" pattern="[a-zA-Z][a-zA-Z ]+[a-zA-Z]$" title="Only letters" required>
					</div>

					<div class="form-group">
						<label for="pass">Password</label>							
						<input type="password" class="form-control" name="pass" placeholder="Enter Password" required>
					</div>

					<div class="form-group">
						<label for="">Retype Password</label>
						<input type="password" class="form-control" placeholder="Retype Password" required>
					</div>

					<div class="form-group">
						<label for="secque">Security Questions</label>
						<select class="form-control" name="secque">
							<option value="What is your childhood fantasy  ?">What is your childhood fantasy ?</option>
							<option value="What is your fathers name ?">What is your fathers name ?</option>
							<option value="What is the surname of your first teacher ?">What is the surname of your first teacher ?</option>
							<option value="What is your fav horror movie ?">What is your fav horror movie ?</option>
							<option value="What is your bestfriend's sister/brother name ?">What is your bestfriend's sister/brother name ? </option>
						</select>
					</div>

					<div class="form-group">
						<label for="secans">Answer</label>
						<input type="text" class="form-control" placeholder="Enter Your Answer" name="secans" required>
					</div>

					<div class="form-group">
						<label for="appname">Name</label>							
						<input type="text" class="form-control" placeholder="Enter Name" name="appname" required>
					</div>
    				
    				Gender : 
  					<div class="custom-control custom-radio custom-control-inline m-2">
    					<input type="radio" class="custom-control-input" id="customRadio" name="gender" value="Male">
    					<label class="custom-control-label" for="customRadio">Male</label>
  					</div>

  					<div class="custom-control custom-radio custom-control-inline">
    					<input type="radio" class="custom-control-input" id="customRadio2" name="gender" value="Female">
    					<label class="custom-control-label" for="customRadio2">Female</label>
  					</div>

  					<div class="custom-control custom-radio custom-control-inline">
    					<input type="radio" class="custom-control-input" id="customRadio3" name="gender" value="Others">
    					<label class="custom-control-label" for="customRadio3">Others</label>
  					</div>

					<div class="form-group mt-2">
						<label for="app_dob">Date of Birth</label>
						<input type="date" class="form-control" placeholder="Enter DOB" name="app_dob">
					</div>

					<div class="form-group">
						<label for="m_status">Marital Status</label>
						<select class="form-control" name="m_status">
							<option value="Single">Single</option>
							<option value="Married">Married</option>
							<option value="Divorced">Divorced</option>
							<option value="Widowed">Widowed</option>
						</select>
					</div>

					<div class="form-group">
						<label for="nationality">Nationality</label>							
						<input type="text" class="form-control" placeholder="Enter Nationality" name="nationality">
					</div>

					<div class="form-group">
						<label for="mobno">Mobile No</label>
						<input type="text" class="form-control" placeholder="Enter Mobile No" name="mobno">
					</div>
				
					<div class="form-group">
						<label for="email">Email ID</label>
						<input type="email" class="form-control"placeholder="Enter Email ID" name="email" required>
					</div>

					<div class="form-group">
						<label for="addr">Address</label>
						<textarea class="form-control" rows="2" placeholder="Enter Address" name="addr"></textarea>
					</div>

					<div class="form-group">
						<label for="quali">Qualification</label>
						<select class="form-control" name="quali">
							<option value="B.Sc">B.Sc</option>
							<option value="BA">BA</option>
							<option value="Graduation">Graduation</option>
							<option value="B.Tech">B.Tech</option>
							<option value="M.Tech">M.Tech</option>
							<option value="MCA">MCA</option>
							<option value="BCA">BCA</option>
							<option value="MBA">MBA</option>
							<option value="BBA">BBA</option>
						</select>
					</div>

					<div class="form-group">
						<label for="skill">Skills:</label>
						<textarea class="form-control" rows="2" placeholder="Enter Skills" name="skill"></textarea>
					</div>

					<div class="form-group">
						<label for="inter">Interests:</label>
						<textarea class="form-control" rows="2" placeholder="Enter Interests" name="inter"></textarea>
					</div>

					<div class="form-group">
						<label for="exper">Experience:</label>
						<textarea class="form-control" rows="2" placeholder="Enter Experience" name="exper"></textarea>
					</div>

					<div class="text-center">
						<button type="submit" class="btn btn-success" value="register" name="reg">Save</button>
						<button type="Reset" class="btn btn-danger">Reset</button>
					</div>
				</form>
			</div>
		</div><br>
			</div>
		</div>
	</div>
</body>
</html>
