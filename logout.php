<?php 
      include 'helper/session.php';
      session_destroy();
      header("location: login.php");
?>