<?php
  include 'user_auth.php';
  include 'config/conn.php'; 
  //
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
      <a class="nav-link" href="PostNewJobs.php" style="color:white;">Post Jobs</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="JobOpen.php" style="color:white;">Jobs Open</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="resume_admin.php" style="color:white;">Resumes</a>
    </li>
     <!-- <li class="nav-item">
      <a class="nav-link" href="#" style="color:white;">Mail</a>
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

<div class="container">
    <div class="row">
    <div class="offset-md-3"></div>
      <div class="col-md-6">
              <div class="card">
                <h2 class= "card-header text-center text-black p-3" style="background-color:#9999ff;">Job Vacancies</h2>
                <div class="card-body">                  
                  <div class="table-responsive">                  
                  <table class="table table-hover table-bordered text-center">
                  <thead class="thead-dark">
                    <tr>
                      <th>Job ID</th>
                      <th>Applicant Name</th>
                    </tr>
                  </thead>
                 <tbody>
                  <?php
                    $query = "SELECT * FROM job";
                    $result = mysqli_query($conn, $query);
                    $r = mysqli_num_rows($result);
                    $counter=1;
                    if($r > 0){
                    while ($row = mysqli_fetch_assoc($result)) {
                    $job_id = $row['JobID'];
                    $name = $row['ApplicantID'];

                    echo "<tr>
                          <td><a href='jobdetailsadmin.php?id=$job_id' class='card-link'> $job_id </a></td>
                          <td><a href='ApplicantDetails.php?id=$name' class='card-link'> $name </a></td>
                          </tr>
                    ";
                    $counter++;
                    }
                    }
                  ?>
                 </tbody>
                </table>
            </div>          
        </div>
      </div>
</body>
</html>
