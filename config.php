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



    $URL = 'http://localhost/~badshah007/rating_system_php_ajax/';
      // $URL = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

      // echo $URL;
    // //
    // echo "<pre>";
    // print_r($_SERVER['SERVER_SOFTWARE']) ;
    // echo "</pre>";

    function test_input($data) {
      $data = trim($data); // to remove all spaces
      $data = stripslashes($data); // remove backslashes
      $data = htmlspecialchars($data); //converts predefined chars to html entities
      return $data;
    }

?>
