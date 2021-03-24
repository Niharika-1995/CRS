<?php
  include 'user_auth.php';
//session_start();
if(isset($_GET["id"])) {
    $_SESSION["appid"] = $_GET["id"];
    //print_r($_SESSION["appid"]);
   include_once 'Class_file/clsApplicantManager.php';
    $obj = new clsApplicant;
    $app = new clsApplicantManager;
    $app->RetrieveApplicant($obj, $_SESSION['appid']);
  }
  

?>

<!Doctype html>
<html>
<head>

       <title>Applicant details</title>
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

<div class="container">
    <div class="row">
    <div class="offset-md-3"></div>
      <div class="col-md-6">
              <div class="card">
                <h2 class= "card-header text-center text-white p-3" style="background-color:#9999ff">Job Details</h2>
                <div class="card-body">
             
              <div class="table">
              <table class="table table-hover table-bordered">
                <tbody>               
                  <tr>
                    <td class="text-white" style="background-color:#9999ff">Applicant ID</td>
                    <td><?php echo $obj->applicantid;?></td>

                  </tr>
                  <tr>
                    <td class="text-white" style="background-color:#9999ff">Name</td>
                    <td><?php echo $obj->name;?></td>
                  </tr>
                  <tr>
                    <td class="text-white" style="background-color:#9999ff">Gender</td>
                    <td><?php echo $obj->gender; ?></td>
                  </tr>
                  <tr>
                    <td class="text-white" style="background-color:#9999ff">DOB</td>
                    <td><?php echo $obj->dob; ?></td>
                  </tr>
                  <tr>
                    <td class="text-white" style="background-color:#9999ff">MStatus</td>
                    <td><?php echo $obj->mstatus; ?></td>
                  </tr>
                  <tr>
                    <td class="text-white" style="background-color:#9999ff">Nationality</td>
                    <td><?php echo $obj->nationality; ?></td>
                  </tr>
                  <tr>
                    <td class="text-white" style="background-color:#9999ff">Mobile</td>
                    <td><?php echo $obj->mobile; ?></td>
                  </tr>
                  <tr>
                    <td class="text-white" style="background-color:#9999ff">Email</td>
                    <td><?php echo $obj->email; ?></td>
                  </tr>
                  <tr>
                    <td class="text-white" style="background-color:#9999ff">Address</td>
                    <td><?php echo $obj->address; ?></td>
                  </tr>
                  <tr>
                    <td class="text-white" style="background-color:#9999ff">Qualification</td>
                    <td><?php echo $obj->qualification; ?></td>
                  </tr>
                    <tr>
                    <td class="text-white" style="background-color:#9999ff">Skills</td>
                    <td><?php echo $obj->skills; ?></td>
                  </tr>
                    <tr>
                    <td class="text-white" style="background-color:#9999ff">Interests</td>
                    <td><?php echo $obj->interests; ?></td>
                  </tr>
                    <tr>
                    <td class="text-white" style="background-color:#9999ff">Experience</td>
                    <td><?php echo $obj->experiences; ?></td>
                  </tr>
                </tbody>
              </table>              
            </div>
          </div>            
        </div>
      </div>
      </div>
    </div>
</body>
</html>
