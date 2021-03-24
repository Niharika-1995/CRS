<?php  
    include 'user_auth.php';

  if (isset($_POST["post_job"])) {
    include_once 'Class_file/clsJobManager.php';
    $obj = new clsJob;
    $app = new clsJobManager;
    $app->PostNewJob($obj);
  }
?>

<!Doctype html>
<html>
<head>

       <title>PostNewJob</title>
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
  <a href="logout.php"><button type="button" style="float:right;background-color:#9999ff;height:40px;color:white">Logout</button></a>
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
     <!-- <li class="nav-item">
      <a class="nav-link" href="mail.php" style="color:white;">Mail</a>
    </li> -->
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
<div class="container-fluid">
  <div class="row">
        <div class="col" style="background-color:#9999ff; height:30px; color:white;"></div>
  </div>
  <br>
  <form action="PostNewJobs.php" method="POST" class="font-weight-bold" name="myform">
    <center>
      <div class="card" style="width:500px;height:900px;text-align:left;">
        <h3 class= "card-header text-center text-Black p-3" style="background-color:#9999ff">Post New Job</h3>
        <div class="card-body">
        <div class="form-group">
            <label for="jobtit">Job Title:</label>           
            <input type="text" class="form-control" placeholder="Enter Title of the job" name="jobtit" pattern="[a-zA-Z][a-zA-Z ]+[a-zA-Z]$" title="Only letters" required>
          </div>
          <div class="form-group">
            <label for="category">Category:</label>           
           <select class="form-control" name="Category">
              <option value="Software">Select</option>
              <option value="Software">Software</option>
              <option value="Hardware">Hardware</option>
            </select>
          </div>
          <div class="form-group">
            <label for="qual">Qualification:</label>           
           <select class="form-control" name="Qualification">
              <option value="Select">Select</option>
              <option value="BA">BA</option>
              <option value="MA">MA</option>
              <option value="B.Sc">B.Sc</option>
              <option value="M.Sc">M.sc</option>
              <option value="B.Tech">B.Tech</option>
              <option value="M.Tech">M.Tech</option>
              <option value="BCA">BCA</option>
              <option value="MCA">MCA</option>
              <option value="BBA">BBA</option>
              <option value="MBA">MBA</option>
            </select>
          </div>
           <div class="form-group">
            <label for="Skills">Skill Set:</label>           
            <textarea class="form-control" rows="4" id="comment" placeholder="Enter Your Skills" name="skill" required></textarea>
          </div>
          <div class="form-group">
            <label for="Experience">Experience:</label>
            <input type="text" class="form-control" placeholder="Enter your Experience" name="exper" required>
          </div>
          <div class="form-group">
            <label for="Place">Place:</label>
            <input type="text" class="form-control" placeholder="Enter the Place" name="place" required>
          </div>
          <div class="form-group">
            <label for="Salary(If Applicable)l">Salary(If Applicable):</label>
            <input type="text" class="form-control" placeholder="NA" name="salary" required>
          </div>
          
          <div class="form-group">
            <label for="Number of Vacancy">Number of Vacancy:</label>
            <input type="text" class="form-control" placeholder="Enter the no. of vacancies" name="vacen" required>
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-success" value="register" name="post_job">Save</button>
            <button type="submit" class="btn btn-danger">Reset</button>
          </div>

</form>
      </div>
        </div>
     </center>
      <br>
  </div>
   
  </div>

   </body>
</html>
