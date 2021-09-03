<?php
  // start session
  session_start();
  // unset all variables
  session_unset();
  //destroy session
  session_destroy();

  // redirect to homepage
  header("Location: {$URL}index.php");
 ?>
