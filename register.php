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
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Cart</a></li>
        <li class="active"><a href="#">Register</a></li>
      </ul>
    </div>
    <div class="login-container">
  <div class="login">
  <?php
  include('database/connection.php');
  if (isset($_REQUEST['username']))
  {
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_escape_string($con, $username);
    $name = stripslashes($_REQUEST['name']);
    $name = mysqli_escape_string($con, $name);
    $surname = stripslashes($_REQUEST['surname']);
    $surname = mysqli_escape_string($con, $surname);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_escape_string($con, $email);
    $country = stripslashes($_REQUEST['country']);
    $country = mysqli_escape_string($con, $country);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_escape_string($con, $password);
    $date = date("Y-m-d H:i:s");
    $query = "INSERT into `users` (username, name, surname, email, country, password, t_date)
     VALUES ('$username', '$name', '$surname', '$email', '$country', '".md5($password)."', '$date')";
      $result = mysqli_query($con, $query);
      var_dump($con);
      if ($result)
      {
        echo "<h3>You are registered Succesfully You may now Sign in</h3>";
        header("Location: signin.php");
      }
      else{
        echo "FAILED";
      }
  }
?>
    <center><h1 class="header-products">Register</h1>
    <form method="post" action="">
      <p><input type="text" name="username" value="" placeholder="Username"></p>
      <p><input type="text" name="name" value="" placeholder="Name"></p>
      <p><input type="text" name="surname" value="" placeholder="Surname"></p>
      <p><input type="text" name="email" value="" placeholder="Email"></p>
      <p><input type="text" name="country" value="" placeholder="Country"></p>
      <p><input type="password" name="password" value="" placeholder="Password"></p>
      <p class="remember_me">
        <label>
         <label>
          <input type="checkbox" name="remember_me" id="remember_me">
          Remember me on this computer
        </label>
        </label>
      </p>
      <p>If you already have an account please <a href="signin.php">Sign in</a></p>
      <p class="submit"><input type="submit" name="commit" value="Login"></p>
    </form>
  </div>
  </center>
</div>
</body>
</html>