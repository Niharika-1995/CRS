<?php
	include 'Class_file/clsResume.php';
	class clsResumeManager{

		function PostNewResume($obj,$id){

			include 'config/conn.php';
			
			//$obj->setTitle($_POST["title"]);
			$obj->setAppId($_SESSION["app_id"]);

			//print_r($obj);
			//$tit = $obj->getTitle();
			$Appid = $obj->getAppId();	

			//echo $Appid;

			$target_dir = "resume/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);			
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$tit=basename($_FILES["fileToUpload"]["name"]);
			//echo $tit;
			// Check if file already exists
			if (file_exists($target_file)) {
			  echo "Sorry, file already exists.";
			  $uploadOk = 0;
			}

			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 500000) {
			  echo "Sorry, your file is too large.";
			  $uploadOk = 0;
			}


			// Allow certain file formats
			if($imageFileType != "pdf") {
			  echo "Sorry,only pdf files are allowed.";
			  $uploadOk = 0;
			}




				if ($uploadOk == 0) {
				  echo "Sorry, your file was not uploaded.";
				// if everything is ok, try to upload file
				} else {
					if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){


					$query = mysqli_query($conn, "INSERT INTO `crsresumes`(`ApplicantID`, `Title`) VALUES ('$Appid', '$tit')");

					if($query){
 						echo "<script> alert('Value inserted successfully.') </script>";
 						
						}
				    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded."
					else {
				    echo "Sorry, there was an error uploading your file.";
				}
 					
				} 
				}


			// Check if image file is a actual image or fake image

			
			
		}
		
		function RetrieveResume($id){
			include 'config/conn.php';
			$query = "SELECT * FROM crsresumes WHERE ApplicantID = $id";
			$result = mysqli_query($conn, $query);
			while ($row = mysqli_fetch_assoc($result)) {
				$row["Title"];
				$r=$row["Title"];
				

			}
			?>
			<iframe src="<?php echo 'resume/'.$r; ?>" width='100%' height='600px' frameborder='0'>This is an embedded <a target='_blank' href='http://office.com'>Microsoft Office</a> document, powered by <a target='_blank' href='http://office.com/webapps'>Office Online</a>.</iframe>
			<?php
		}

		
	}
	
?>
