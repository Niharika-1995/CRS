<?php
  include'admin_auth.php';
  include'config/conn.php';
 

?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>for user</title>
	    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>	
</head>
<body style="background-color:#9999ff;">
  <div class="container-fluid">
   <div class="row">
        <div class="col" style="background-color:#9999ff; height:120px; color:white;"><br><br><h1><center>Central Requirement System</center></h1></div>

   </div></div>
<nav class="navbar-expand-sm bg-dark" style="height:40px">
  <button type="button" style="float:right;background-color:#9999ff;height:40px;color:white"><a href="logout.php">Logout</button></a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#" style="color:white;">My Account</a>
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

  </ul>
</nav>
</div>
<div class="container">
    <div class="row">
    <div class="offset-md-3"></div>
      <div class="col-md-6">
              <div class="card">
                <h2 class= "card-header text-center text-black p-3" style="background-color:#9999ff;">Result</h2>
                <div class="card-body">
                <form action="selection_admin.php" method="POST">                  
                  <div class="table-responsive">                  
                  <table class="table table-hover table-bordered text-center">
                  <thead class="thead-dark">
                    
                  </thead>
                 <tbody>
                  
                  <?php
                  $id=$_SESSION['userid'];

               

                    
                    

                    $query1 ="SELECT * FROM `job`,`crsjobsopen` WHERE `ApplicantID`='$id' AND `job`.`IsSelected`='1' AND `job`.`JobID`=`crsjobsopen`.`JobID`";

                    $result = mysqli_query($conn, $query1);
                    $r = mysqli_num_rows($result);

                    while ($row = mysqli_fetch_assoc($result)) {
                    //$appid = $row['ApplicantID'];
                    $tit=$row['Title'];
                    echo"You are Selected for the post of ".$tit;echo"<br>";

                  }


    
                  ?>
                  
                 </tbody>
                </table>
            </div> 



</body>
</html>