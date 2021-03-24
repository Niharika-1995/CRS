<?php
  session_start();
  include 'config/conn.php';
  // if(isset($_SESSION["userId"])) {
  //   if($_SESSION["UserID"] == "admin"){
  //     echo '<script>windows: location="PostNewJobs.php"</script>';
  //   }
  // }

  if (isset($_POST["login"])) {
   include 'config/conn.php';
  
    $uname = $_POST['usrnm'];
    $pwd = $_POST['pswd'];
    $pwd = md5($pwd);    
  
    $login = mysqli_query($conn, "SELECT * FROM users WHERE ((`UserID` = '$uname') AND (`Passwd` = '$pwd'))");
  
    $row=mysqli_fetch_array($login);

    if($row){
      $_SESSION['userid'] = $uname;
      date_default_timezone_set("Asia/Kolkata");
      $dt = date("Y-m-d h:i:sa");

      mysqli_query($conn, "UPDATE `users` SET `LastLogin`='$dt' WHERE UserID = '$uname'");

      if($row["Role"] == 1)
        echo '<script>windows: location="PostNewJobs.php"</script>';
      else{
        $res = mysqli_query($conn, "SELECT `ApplicantID` FROM `crsapplicant` WHERE `UserID` = '$uname'");
        $row=mysqli_fetch_array($res);
        $_SESSION['app_id'] = $row["ApplicantID"];
        
        echo '<script>windows: location="user.php"</script>';        
      }
    }
    else {
      echo '<script>alert("Invalid Username or Password.")</script>';
      echo '<script>windows: location="Index.php"</script>';   
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>CRS 1st Page</title>

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
    
<nav class="navbar-expand-sm bg-dark" style="height:40px;">
 
</nav>
<br>
<div class="container-fluid">

    <div class="row">
      <div class="col-sm-6">
              <div class="card" style="height:380px;width:605px;background-color:white; ">
                <h3 class= "card-header text-center text-black p-3" style="background-color:#9999ff;">Hot Jobs</h3>

               <?php
                    $query = "SELECT * FROM crsjobsopen";
                    $result = mysqli_query($conn, $query);
                    $r = mysqli_num_rows($result);
                    $counter=1;
                    if($r > 0){
                    while ($row = mysqli_fetch_assoc($result)) {
                    $job_id = $row['JobID'];
                    $title = $row['Title'];
                    echo "<tr>
                          <td><center><a href='Hot Jobs.php?id=$job_id' class='card-link'> $title </a></td>
                          </tr></center>
                    ";

                    $counter++;
                    }
                    }
                  ?>
             
               
        </div>       
      </div>
    
      <div class="col-sm-6">
              <div class="card" style="height:380px; width:580px;background-color:white;">        
        <h3 class= "card-header text-center text-black p-3" style="background-color:#9999ff" >Member Login</h3>
                
                <div class="card-body">
                 <form action="index.php" method="POST">          
                    <div class="input-group mb-3">
                       User Name:&nbsp;
                        <input type="text" class="form-control"  id="uname" placeholder="Enter Username" name="usrnm" pattern="[a-zA-Z][a-zA-Z ]+[a-zA-Z]$" title="Only letters" required>
                    </div>

                    <div class="input-group mb-3">
                        Password:&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="password" class="form-control"  id="pwd" placeholder="Enter a Password" name="pswd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Combination of Small and capital letter character,no and 8 digit" required>

                    </div>

            
               <br><br><br>
              <div class="text-center">
                <button type="submit" class="btn btn-success" name="login">Login</button>
                <button type="reset" class="btn btn-danger">Reset</button>
              </div>
              <br>
              <div class="text-center">
                <a href="registration.php"><button type="button" class="btn btn-info">Sign Up</button></a>
              </div>
            </form>
            <br>
            <!--<div class="text-center">
              <a href="ForgotPassword.php" class="card-link">Forgot Your Password ?</a>
            </div>  -->          
          </div>
          </div>
        </div>
       
    </div>
  </div>
 
</body>
</html>
