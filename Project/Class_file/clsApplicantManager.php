<?php
	include 'Class_file/clsApplicant.php';
	class clsApplicantManager{

		function PostNewApplicant($obj){

			include 'config/conn.php';

			$obj->setAppUserid($_POST["uname"]);
			$pwd = md5($_POST["pass"]);
			$obj->setApppassword($pwd);
			$obj->setAppsecques($_POST["secque"]);
			$obj->setAppsecans($_POST["secans"]);
			
			$obj->setAppname($_POST["appname"]);
			$obj->setAppgender($_POST["gender"]);
			$obj->setAppdob($_POST["app_dob"]);
			$obj->setAppmrstatus($_POST["m_status"]);
			$obj->setAppnationality($_POST["nationality"]);
			$obj->setAppphone($_POST["mobno"]);
			$obj->setAppemail($_POST["email"]);
			$obj->setAppaddress($_POST["addr"]);
			$obj->setAppqualification($_POST["quali"]);
			$obj->setAppskills($_POST["skill"]);
			$obj->setAppinterests($_POST["inter"]);
			$obj->setAppexperience($_POST["exper"]);

			$user_id = $obj->getAppUserid();
			
			$pass = $obj->getApppassword();
			$sec_que = $obj->getAppsecques();
			$sec_ans = $obj->getAppsecans();
			
			
			$name = $obj->getAppname();
			$gen = $obj->getAppgender();
			$dob = $obj->getAppdob();
			$mstatus = $obj->getAppmrstatus();
			$nation = $obj->getAppnationality();
			$phone = $obj->getAppphone();
			$mail = $obj->getAppemail();
			$address = $obj->getAppaddress();
			$qualify = $obj->getAppqualification();
			$skills = $obj->getAppskills();
			$interest = $obj->getAppinterests();			
			$experience = $obj->getAppexperience();

			

 			mysqli_query($conn, "INSERT INTO `users`(`UserID`, `Passwd`, `Role`, `Status`, `LastLogin`, `SecQues`, `SecAns`) VALUES ('$user_id', '$pass', '0', '0', '0', '$sec_que', '$sec_ans')");

 			mysqli_query($conn, "INSERT INTO `crsapplicant`(`Name`, `Gender`, `Dob`, `mrStatus`, `Nationality`, `Phone`, `Email`, `Address`, `Qualification`, `Skills`, `Interests`, `Experience`, `eStatus`, `eEmployer`, `Ref`, `IsNotified`, `UserID`) VALUES ('$name', '$gen', '$dob', '$mstatus', '$nation', '$phone', '$mail', '$address', '$qualify', '$skills', '$interest', '$experience', '0', '0', '0', '0', '$user_id')");


 			$result = mysqli_query($conn, "SELECT `ApplicantID` FROM `crsapplicant` WHERE `UserID` = '$user_id'"); 			

 			$row=mysqli_fetch_array($result);
			$appid = $row["ApplicantID"];
			
 			//mysqli_query($conn, "INSERT INTO `crsapplicant`(`ApplicantID`, `JobID`) VALUES ('$appid', '$job_id')");
			if($result)
				echo "<script> alert('Record Successfully Updated.') </script> ";
		}
		function RetrieveApplicant($obj, $appid){
			//print_r($appid);
			include 'config/conn.php';
			$query = "SELECT * FROM crsapplicant WHERE Name = '$appid'";
			$result = mysqli_query($conn, $query);
			//print_r($result);
			$r = mysqli_num_rows($result);
			//print_r($r);
			$counter = 1;
			if($r > 0){
				while ($row = mysqli_fetch_assoc($result)) {
				$obj->setapplicantid($row["ApplicantID"]);				
				$obj->setAppname($row["Name"]);
				$obj->setAppgender($row["Gender"]);
				$obj->setAppdob($row["Dob"]);
				$obj->setAppmrstatus($row["mrStatus"]);
				$obj->setAppnationality($row["Nationality"]);
				$obj->setAppphone($row["Phone"]);
				$obj->setAppemail($row["Email"]);
				$obj->setAppaddress($row["Address"]);
				$obj->setAppqualification($row["Qualification"]);
				$obj->setAppskills($row["Skills"]);
				$obj->setAppinterests($row["Interests"]);
				$obj->setAppexperience($row["Experience"]);
				}
			}
		}
		function editApplicant($obj, $appid){
			
			include 'config/conn.php';

			//$obj->setAppUserid($row["ApplicantID"]);
			//$obj->setJobID($row["JobID"]);
			$obj->setAppname($_POST["appname"]);
			$obj->setAppgender($_POST["gender"]);
			$obj->setAppdob($_POST["app_dob"]);
			$obj->setAppmrstatus($_POST["m_status"]);
			$obj->setAppnationality($_POST["nationality"]);
			$obj->setAppphone($_POST["mobno"]);
			$obj->setAppemail($_POST["email"]);
			$obj->setAppaddress($_POST["addr"]);
			$obj->setAppqualification($_POST["quali"]);
			$obj->setAppskills($_POST["skill"]);
			$obj->setAppinterests($_POST["inter"]);
			$obj->setAppexperience($_POST["exper"]);

			//$app_id = $obj->getAppUserid();
			//$job_id = $obj->getJobID();
			$name = $obj->getAppname();
			$gen = $obj->getAppgender();
			$dob = $obj->getAppdob();
			$mstatus = $obj->getAppmrstatus();
			$nation = $obj->getAppnationality();
			$phone = $obj->getAppphone();
			$mail = $obj->getAppemail();
			$address = $obj->getAppaddress();
			$qualify = $obj->getAppqualification();
			$skills = $obj->getAppskills();
			$interest = $obj->getAppinterests();
			$experience = $obj->getAppexperience();

			$result = mysqli_query($conn, "UPDATE `crsapplicant` SET  `Name`='$name',`Gender`='$gen',`Dob`='$dob',`mrStatus`='$mstatus',`Nationality`='$nation',`Phone`='$phone',`Email`='$mail',`Address`='$address',`Qualification`='$qualify',`Skills`='$skills',`Interests`='$interest',`Experience`='$experience' WHERE `ApplicantID`='$appid'");

			if($result)
				echo "<script> alert('Record Successfully Updated.') </script> ";
		}

	}
?>