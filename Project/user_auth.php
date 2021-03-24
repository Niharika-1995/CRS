<?php
    session_start();
    
    if(!isset($_SESSION["userid"])) {
        echo '<script>windows: location="Index.php"</script>';
    }
    else{
        $usr = $_SESSION["userid"];
    }

    if($usr != "admin"){
      echo '<script>alert("Access Denied!!!. You must be login as Admin.")</script>';
      echo '<script>windows: location="Index.php"</script>';
    }
?>