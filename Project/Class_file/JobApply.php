<?php
include 'Class_file/Job.php';
class JobApply{
	
	function PostJob($obj){

		include 'config/conn.php';

		$obj->setJobID($_POST["jobid"]);
		$obj->setApplicantID($_SESSION["userid"]);
		

		$jobid=$obj->getJobID();
		$appId=$obj->getApplicantID();

		

		foreach($_POST["jobid"] as $chk1) {
			$query = mysqli_query($conn, "INSERT INTO `job`(`ApplicantID`, `JobID`,`IsSelected`) VALUES ('$appId', '$chk1','0')");
			

	}
	if($query){
				echo "<script> alert('Job applied successfully.') </script>";
			}
	}
	function EditJob($obj, $job)
	{
	include 'config/conn.php';	
	// print_r($obj);
	// print_r($job);
	
	


	foreach($obj as $chk2) {
			$query = mysqli_query($conn, "UPDATE `job` SET `IsSelected`= '1' WHERE `JobID`='$job' AND `ApplicantID`='$chk2'");
			
	}
	if($query){
				echo "<script> alert('update successfully.') </script>";
			}



	}
}

?>