<?php
session_start();
function check_dup($arr, $needle)
{
	foreach ($arr as $elem)
	{
		if ($elem == $needle)
			return (1);
	}
	return (0);
}
		if (isset($_GET['product']))
		{
			if (!isset($_SESSION['username']))
				header("Location: signin.php");
			$temp = $_GET['product'];
			if (isset($_COOKIE['active-cart']))
			{
					$arr = explode("=", $_COOKIE['active-cart']);
					if (!check_dup($arr, $temp))
					{
						$temp2 = $_COOKIE['active-cart'];
						$temp_arr = "$temp2=$temp";
						setcookie("active-cart", $temp_arr, time() + 5000);
					}
			}
			else
				setcookie("active-cart", $temp, time() + 5000);
		}
?>
<html>
<head>
	<title>RushStore</title>
	<link rel="stylesheet" type="text/css" href="style/main.css">
</head>
<body>
 <div class="navigation-bar">
    <div id="navigation-container">
      <img class="logo" src="https://www.rock.com/assets/products/364892/large/rush-old-logo-rub-on-sticker-s4644r-red-revised.jpg">
      <ul>
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="cart.php">Cart</a></li>
        <?php
        if (isset($_SESSION['username']))
        {
        	echo "<li><a href=\"signout.php\">Sign out</a></li>";
        	echo "<li class=\"login-name\"><a href=\"#\" class=\"login-name\">Hello, ".$_SESSION['name']."</a></li>";
        }
        else
        	echo "<li><a href=\"signin.php\">Sign in</a></li>";
        ?>
      </ul>
    </div>
    <div class="container">
      <div class="product-display">
        <h1 class="header-products">Albums</h1>
            <?php include ('database/items.php');?>
        </div>
      </div>
</body>
</html>