<?php
  //include 'admin_auth.php';
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

  </ul>
</nav>
</div>
</body>
</html>