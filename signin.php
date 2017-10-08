<html>
<head>
    <title>Sign in | RushStore</title>
    <link rel="stylesheet" type="text/css" href="style/main.css">
</head>
<body>
 <div class="navigation-bar">
    <div id="navigation-container">
      <a href="index.php"><img class="logo" src="https://www.rock.com/assets/products/364892/large/rush-old-logo-rub-on-sticker-s4644r-red-revised.jpg"></a>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Cart</a></li>
        <li class="active"><a href="#">Sign in</a></li>
      </ul>
    </div>
    <div class="login-container">
  <div class="login">
  <?php
  include('database/connection.php');
  session_start();
  if (isset($_POST['username']))
  {
      $username = stripslashes($_REQUEST['username']);
      $username = mysqli_real_escape_string($con, $username);
      $password = stripslashes($_REQUEST['password']);
      $password = mysqli_real_escape_string($con, $password);
        if (strstr($username, "@"))
          $query = "SELECT * FROM `users` WHERE email='$username' AND password='".md5($password)."'";
        else
          $query = "SELECT * FROM `users` WHERE username='$username' AND password='".md5($password)."'";
      $result = mysqli_query($con, $query);
      $rows = mysqli_num_rows($result);
      if ($rows == 1)
      {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row["username"];
        $_SESSION['name'] = $row['name'];
        $_SESSION['username'] = $row["username"];
        $_SESSION['surname'] = $row["surname"];
        header("Location: index.php");
      }
      else
      {
        echo "FAILED";
        echo "<h3>Username or Password Incorrect</h3>";
      }
  }
?>
    <center><h1 class="header-products">Login</h1>
    <form method="post" action="">
      <p><input type="text" name="username" value="" placeholder="Username or Email"></p>
      <p><input type="password" name="password" value="" placeholder="Password"></p>
      <p class="remember_me">
        <label>
         <label>
          <input type="checkbox" name="remember_me" id="remember_me">
          Remember me on this computer
        </label>
        </label>
      </p>
      <p>If you do not have an account please <a href="register.php">Register</a></p>
      <p class="submit"><input type="submit" name="commit" value="Login"></p>
    </form>
  </div>
  </center>
</div>
</body>
</html>