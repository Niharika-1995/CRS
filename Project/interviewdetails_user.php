<?php
  include 'admin_auth.php';
//session_start();
//include 'config/conn.php';
//if(isset($_GET["id"])) {
    //$_SESSION["j_id"] = $_GET["id"];
 	
   include_once 'Class_file/clsInterviewManager.php';
    $obj = new clsInterview;
    $app = new clsInterviewManager;
    $app->RetrieveInterview($obj, $_SESSION['j_id']);
    
  //}
  

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
                    <td class="text-white" style="background-color:#9999ff">Job ID</td>
                    <td><?php echo $obj->JobID;?></td>

                  </tr>
                  <tr>
                    <td class="text-white" style="background-color:#9999ff">Interview Date</td>
                    <td><?php echo $obj->Idate;?></td>
                  </tr>
                  <tr>
                    <td class="text-white" style="background-color:#9999ff">Interview Time</td>
                    <td><?php echo $obj->Itime; ?></td>
                  </tr>
                  <tr>
                    <td class="text-white" style="background-color:#9999ff">Interview Place</td>
                    <td><?php echo $obj->Iplace; ?></td>
                  </tr>
                  <tr>
                    <td class="text-white" style="background-color:#9999ff">Note</td>
                    <td><?php echo $obj->Inote; ?></td>
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
