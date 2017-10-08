<?php
session_start();
if(session_destroy())
{
var_dump($_COOKIE['active-cart']);
setcookie('active-cart', NULL, -1);
header("Location: signin.php");
}
?>