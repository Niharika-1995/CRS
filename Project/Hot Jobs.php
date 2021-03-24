
<?php
  include 'admin_auth.php';
//session_start();

  if(isset($_GET["id"])) {
    $_SESSION["j_id"] = $_GET["id"];
    include_once 'Class_file/clsJobManager.php';
    $obj = new clsJob;
    $app = new clsJobManager;
    $app->RetrieveJob($obj, $_GET["id"]);
  }
  else {
    $j_id = $_SESSION["j_id"];
    include_once 'Class_file/clsJobManager.php';
    $obj = new clsJob;
    $app = new clsJobManager;
    $app->RetrieveJob($obj, $j_id);
  }

  if (isset($_POST["close_job"])) {
      $j_id = $_SESSION["j_id"];
      include_once 'Class_file/clsJobManager.php';
      $obj = new clsJob;
      $app = new clsJobManager;
      $app->RemoveJob($obj, $j_id);
  }
  $_SESSION["j_id"] = $_GET["id"];
?>
<!Doctype html>
<html>
<head>

       <title>Job details</title>
       <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
</head>
   <body>
   
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
                    <td><?php echo $obj->JobID; ?></td>
                  </tr>
                  <tr>
                    <td class="text-white" style="background-color:#9999ff">Title</td>
                    <td><?php echo $obj->Title; ?></td>
                  </tr>
                  <tr>
                    <td class="text-white" style="background-color:#9999ff">Catagory</td>
                    <td><?php echo $obj->Category; ?></td>
                  </tr>
                  <tr>
                    <td class="text-white" style="background-color:#9999ff">Qualification</td>
                    <td><?php echo $obj->Qualification; ?></td>
                  </tr>
                  <tr>
                    <td class="text-white" style="background-color:#9999ff">Skills</td>
                    <td><?php echo $obj->Skills; ?></td>
                  </tr>
                  <tr>
                    <td class="text-white" style="background-color:#9999ff">Place</td>
                    <td><?php echo $obj->Place; ?></td>
                  </tr>
                  <tr>
                    <td class="text-white" style="background-color:#9999ff">Experiences</td>
                    <td><?php echo $obj->Experience; ?></td>
                  </tr>
                  <tr>
                    <td class="text-white" style="background-color:#9999ff">Salary</td>
                    <td><?php echo $obj->Salary; ?></td>
                  </tr>
                  <tr>
                    <td class="text-white" style="background-color:#9999ff">No. of Vacancies</td>
                    <td><?php echo $obj->nVacant; ?></td>
                  </tr>
                  <tr>
                    <td class="text-white" style="background-color:#9999ff">Interview Status</td>
                    <td><?php echo $obj->IsScheduled; ?></td>
                  </tr>
                </tbody>
              </table>              
            </div>
            <div class="text-center">
              <a href="Index.php"><button type="button" class="btn btn-success">Login to Apply</button></a>
            </div> 
            
          </div>            
        </div>
      </div>
      </div>
</body>
</html>