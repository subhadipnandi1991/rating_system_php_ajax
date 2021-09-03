<?php
  include 'config.php';

  if(!session_id()) {
    session_start();
  }

  if(isset($_SESSION['user'])) {
    header("Location: {$URL}index.php");
  } else {

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rating System</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="main">
        <div id="header">
            <h1>Login</h1>
        </div>
        <div id="content">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="text" name="username" value="" />
                </div>
                <div class="form-group">
                    <label>password</label>
                    <input type="password" name="password" value="" />
                </div>
                <input type="submit" class="btn" name="login" value="Login" />
            </form>
            <?php
              if (isset($_POST['login'])) {
                if (!isset($_POST['username']) || $_POST['username'] == '') {
                  echo '<div class="message-error">Please Fill All the fields</div>';
                } elseif (!isset($_POST['password']) || $_POST['password'] == '') {
                  echo '<div class="message-error">Please Fill All the fields</div>';
                } else {
                  $username = test_input(mysqli_real_escape_string($conn, $_POST['username']));
                  $password = md5(test_input(mysqli_real_escape_string($conn, $_POST['password'])));

                  // echo $username;
                  // echo $password;
                  // die();

                  $sql = "SELECT username FROM users WHERE username='$username' AND password='$password'";
                  $result = mysqli_query($conn, $sql);

                  if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      /* Start the session */
                      session_start();
                      /* set session variables */
                      $_SESSION['user'] = $username;
                      /* redirect to page after successfully login*/
                      header("Location: {$URL}index.php");
                    }
                  } else {
                    echo '<div class="message-error">Username and Password does not matched</div>';
                  }
                }
              }

              mysqli_close($conn);
            ?>
          </div>
    </div>
</body>
</html>
<?php } ?>
