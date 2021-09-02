<?php

    $servername = "localhost";
    $username = "badshah007";
    $password = "Baadshah@165$";
    $dbname = "rating_system";
    /* Create connection*/
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    /* Check connection*/
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $URL = $_SERVER['HTTP_HOST'];

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

?>
