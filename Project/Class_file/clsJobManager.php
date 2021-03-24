<?php
include 'Class_file/clsJob.php';

class clsJobManager{

	function PostNewJob($obj){

		include 'config/conn.php';

			$obj->setTitle($_POST["jobtit"]);
			$obj->setCategory($_POST["Category"]);
			$obj->setQualification($_POST["Qualification"]);
			$obj->setSkills($_POST["skill"]);
			$obj->setExperience($_POST["exper"]);
			$obj->setPlace($_POST["place"]);
			$obj->setSalary($_POST["salary"]);
			$obj->setNumvac($_POST["vacen"]);
			


			$title = $obj->getTitle();
			$catagory = $obj->getCategory();
			$qualify = $obj->getQualification();
			$skill = $obj->getSkills();
			$experience = $obj->getExperience();
			$palce = $obj->getPlace();
			$salary = $obj->getSalary();
			$vacencies = $obj->getNumvac();
 			

 			$query = mysqli_query($conn, "INSERT INTO `crsjobsopen`(`Title`, `Category`, `Qualification`, `Skills`, `Experience`, `Place`, `Salary`, `nVacant`, `IsScheduled`) VALUES ('$title', '$catagory', '$qualify', '$skill', '$experience', '$palce', '$salary', '$vacencies', '0')");

 			if($query)
 				echo "<script> alert('Job posted successful.') </script>";
 			else{
 			echo "<script> alert('Invalid Input') </script>";
 		}
	}
	function RetrieveJob($obj, $id)
	{
			include 'config/conn.php';
			$query = "SELECT * FROM crsjobsopen WHERE JobID = $id";
			$result = mysqli_query($conn, $query);
			while ($row = mysqli_fetch_assoc($result)) {
			$obj->setJobID($row["JobID"]);
			$obj->setTitle($row["Title"]);
			$obj->setCategory($row["Category"]);
			$obj->setQualification($row["Qualification"]);
			$obj->setSkills($row["Skills"]);
			$obj->setExperience($row["Experience"]);
			$obj->setPlace($row["Place"]);
			$obj->setSalary($row["Salary"]);
			$obj->setNumvac($row["nVacant"]);
			$obj->setSch($row["IsScheduled"]);
			}
	}
		function EditJob($obj, $id)
		{
			include 'config/conn.php';

			$obj->setTitle($_POST["jobtit"]);
			$obj->setCategory($_POST["Catagory"]);
			$obj->setQualification($_POST["Qualification"]);
			$obj->setSkills($_POST["skill"]);
			$obj->setExperience($_POST["exper"]);
			$obj->setPlace($_POST["place"]);
			$obj->setSalary($_POST["salary"]);
			$obj->setNumvac($_POST["vacen"]);

			$title = $obj->getTitle();
			$catagory = $obj->getCategory();
			$qualify = $obj->getQualification();
			$skill = $obj->getSkills();
			$experience = $obj->getExperience();
			$palce = $obj->getPlace();
			$salary = $obj->getSalary();
			$vacencies = $obj->getNumvac();

			$query = mysqli_query($conn, "UPDATE `crsjobsopen` SET `Title`='$title',`Category`='$catagory',`Qualification`='$qualify',`Skills`='$skill',`Experience`='$experience',`Place`='$palce',`Salary`='$salary',`NVacant`='$vacencies' WHERE `JobID` = '$id'");
			
			if($query)
 				echo "<script> alert('Job update successful.') </script>";
		}
		function RemoveJob($obj, $id)
		{
			include 'config/conn.php';

			mysqli_query($conn, "DELETE FROM `crsjobsopen` WHERE `JobID` = '$id'");

			echo '<script>windows: location="JobOpen.php"</script>';
		}
}
?>