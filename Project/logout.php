<?php
session_start();
session_unset();
session_destroy();
 echo '<script>windows: location="Index.php"</script>';
?>