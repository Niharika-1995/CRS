<?php
  include 'admin_auth.php';
  include 'config/conn.php'; 
  //

  //session_start();
  if (isset($_POST["reg"])) {
    include 'Class_file/JobApply.php';
    $obj = new Job;
    $app = new JobApply;
    // $j_id = $_SESSION["job_id"];
    $app->PostJob($obj);

  }
?>
<!DOCTYPE html>
<html>
<head>
       <title>JobOpen</title>
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
      <a class="nav-link" href="changepassword.php" style="color:white;">My Account</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="user_job_open.php" style="color:white;">Jobs Open</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="resume.php" style="color:white;">Upload Resume</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="view_resume.php" style="color:white;">View Resume</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="status.php" style="color:white;">Status</a>
    </li>

</nav>
</button>
<div class="container">
    <div class="row">
    <div class="offset-md-3"></div>
      <div class="col-md-6">
              <div class="card">
                <h2 class= "card-header text-center text-black p-3" style="background-color:#9999ff;">Job Vacancies</h2>
                <div class="card-body">
                <form action="user_job_open.php" method="POST">                  
                  <div class="table-responsive">                  
                  <table class="table table-hover table-bordered text-center">
                  <thead class="thead-dark">
                    <tr>
                      <th>Job ID</th>
                      <th>Job Title</th>
                    </tr>
                  </thead>
                 <tbody>
                  
                  <?php
                    $query1 = "SELECT * FROM crsjobsopen";
                    $result = mysqli_query($conn, $query1);
                    $r = mysqli_num_rows($result);
                    $counter=1;
                    if($r > 0){
                    while ($row = mysqli_fetch_assoc($result)) {
                    $job_id = $row['JobID'];
                    $title = $row['Title'];


                    $query2="SELECT * FROM `job` WHERE `job`.`JobID`='$job_id' AND `job`.`ApplicantID`='$_SESSION[userid]'";
                    $result1= mysqli_query($conn,$query2);
                    //$s=mysqli_num_rows($result1);
                    $row1 = mysqli_fetch_assoc($result1);
                    
                    if($row1['JobID']==$job_id){

                          echo  "<tr>
                          <td><input type='checkbox' name='jobid[]' value='$job_id' disabled>
                          <a href='user_job_details.php?id=$job_id' class='card-link'> $job_id </a></td>
                          <td><a href='user_job_details.php?id=$job_id' class='card-link'> $title </a></td>
                          </tr>
                         
                    ";
                    }else{



                    echo "<tr>
                          <td><input type='checkbox' name='jobid[]' value='$job_id'>
                          <a href='user_job_details.php?id=$job_id' class='card-link'> $job_id </a></td>
                          <td><a href='user_job_details.php?id=$job_id' class='card-link'> $title </a></td>
                          </tr>
                         
                    ";
                    }
                    $counter++;
                    }
                    }
                  ?>
                  
                 </tbody>
                </table>
            </div> 
             <div class=text-center>
                   <button type="submit" class="btn btn-info" name="reg">Apply</button>
                 </div> 
                 </form>        
        </div>
      </div>
</body>
</html>
