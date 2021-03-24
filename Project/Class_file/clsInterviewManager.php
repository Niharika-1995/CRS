<?php
include 'Class_file/clsInterview.php';
class clsInterviewManager{
	function addInterview($obj){

		include 'config/conn.php';

			$obj->setJobID($_SESSION["j_id"]);
			$obj->setIdate($_POST["i_date"]);
			$obj->setItime($_POST["i_time"]);
			$obj->setIplace($_POST["i_place"]);
			$obj->setInote($_POST["i_note"]);
			
			$j_id = $obj->getJobID();
			$date = $obj->getIdate();
			$time = $obj->getItime();
			$place = $obj->getIplace();
			$note = $obj->getInote();

			$result = mysqli_query($conn, "SELECT * FROM `crsinterview` WHERE `JobID` = '$j_id'");
			$rowcount = mysqli_num_rows($result);
			if($rowcount == 0) {
				$result = mysqli_query($conn, "INSERT INTO `crsinterview`(`JobID`, `intdate`, `inttime`, `place`, `note`) VALUES ('$j_id', '$date', '$time', '$place', '$note')");
				
				if($result)
 					echo "<script> alert('New Interview details added successful.') </script>";
			}
			else  {
				$result = mysqli_query($conn, "UPDATE `crsinterview` SET `intdate`='$date', `inttime`='$time', `place`='$place', `note`='$note' WHERE `JobID` = '$j_id'");
				
				if($result)
 					echo "<script> alert('Interview details updated successful.') </script>";
			}
	}
	function RetrieveInterview($obj, $id){
			
			include 'config/conn.php';			
			$query = "SELECT * FROM `crsinterview` WHERE `JobID` = '$id'";
			$result = mysqli_query($conn, $query);
			while ($row = mysqli_fetch_assoc($result)) {
				$obj->setJobID($row["JobID"]);
				$obj->setIdate($row["intdate"]);
				$obj->setItime($row["inttime"]);
				$obj->setIplace($row["place"]);
				$obj->setInote($row["note"]);
			}
	}
	function EditInterview($obj){
		include 'config/conn.php';
	}
}

?>