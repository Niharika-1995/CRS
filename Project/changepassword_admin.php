<?php
include'config/conn.php';
include'user_auth.php';

if(isset($_POST["reg"])){
  $id=$_SESSION["userid"];
  $pass=md5($_POST["New_Pass"]);
  $crnt_pass=md5($_POST["Crnt_Pass"]);
  $query1 ="UPDATE `users` set `Passwd`='$pass' WHERE `UserID`='$id' AND `users`.`Passwd`='$crnt_pass'";
  $result = mysqli_query($conn, $query1);
  //$row = mysqli_fetch_assoc($result);
  $r=mysqli_affected_rows($conn);
  //echo $r;

  if($r==0){
  echo"<script>
  alert('Cannot Update!!!')
  </script>";
}
else{
   echo"<script>
  alert('Update Successful!!')
  </script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <title>Changepassword</title>

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

<br>
<div class="container-fluid">
  <form action="" method="POST" class="font-weight-bold">
    <center>
      <div class="card" style="width:500px;height:400px;text-align:left;">
        <h3 class= "card-header bg-light text-center text-Black p-3">Change Password</h3>
        <div class="card-body">
        <div class="form-group">
            <label for="Crnt_Pass">Current Password:</label>           
            <input type="Password" class="form-control" placeholder="Enter Current Password" name="Crnt_Pass">
          </div>
          <div class="form-group">
            <label for="New_Pass">New Password:(6-20 character)</label>           
            <input type="Password" class="form-control" placeholder="Enter New Password(6-20 character)" name="New_Pass">
          </div>
          
          <div class="text-center">
            <button type="submit" class="btn btn-success" value="register" name="reg">Save</button>
          </div>
          


          
</div>
</div>
</center>
</form>
</div>
</body>
</html>