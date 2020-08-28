<?php
   //session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   unset($_SESSION['user_type']);

   header('Refresh: 0; URL = index.php');
?>
