<?php
  session_start();
  unset($_SESSION["admin"]); 
  unset($_SESSION["Ing.Alvarez"]);
  session_destroy();
  header("Location: index.php");

  exit;
?>