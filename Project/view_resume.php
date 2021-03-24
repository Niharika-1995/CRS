<html>  
<head>
	<title>
		Resume View_User
	</title>
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
    </li
    <li class="nav-item">
      <a class="nav-link" href="status.php" style="color:white;">Status</a>
    </li>
  </ul>
    </nav>

</body>
</html>
<?php
  
  
  function read($file){
  	
  	?>
  		<iframe src="<?php echo $file; ?>" width='100%' height='100%' frameborder='0'>This is an embedded <a target='_blank' href='http://office.com'>Microsoft Office</a> document, powered by <a target='_blank' href='http://office.com/webapps'>Office Online</a>.</iframe>



<?php
 }
 include 'admin_auth.php';
include 'config/conn.php';
$id=$_SESSION['app_id'];
//echo $id;

$query="SELECT Title FROM crsresumes WHERE ApplicantID = $id";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
	//$row["Title"];
	$r=$row["Title"];
	//echo $r;

  
}
read('resume/'.$r);
?>