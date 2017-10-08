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
        <li><a href="index.php">Home</a></li>
        <li><a href="items.php">Products</a></li>
        <li class="active"><a href="#">Cart</a></li>
        <?php
        session_start();
        if (isset($_SESSION['username']))
        {
        	echo "<li><a href=\"signout.php\">Sign out</a></li>";
        	echo "<li class=\"login-name\"><a href=\"#\" class=\"login-name\">Hello, ".$_SESSION['name']."</a></li>";
        }
        else
        	header("Location: signin.php");
        ?>
      </ul>
    </div>
    <div class="container">
      <div class="product-display">
        <h1 class="header-products">Cart</h1>
        <a href="#"><h2>Proceed to Checkout</h2></a> 
            <?php include ('database/cart.php');?>
        </div>
      </div>
</body>
</html>