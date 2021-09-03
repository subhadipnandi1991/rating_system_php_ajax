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



    // $URL = 'http://localhost/~badshah007/rating-system/';
      $URL = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

      echo $URL;
    // //
    // echo "<pre>";
    // print_r($_SERVER['SERVER_SOFTWARE']) ;
    // echo "</pre>";

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

?>
