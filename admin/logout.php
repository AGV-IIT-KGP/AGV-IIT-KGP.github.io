<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>AGV Admin Portal</title>
</head>
<body>
<?php
session_start();
?>
<?php
if(!isset($_SESSION['logout'])){
					print("<a href=\"login.php\">Please login first</a>");
					exit();
					}
$_SESSION = array(); 
session_destroy();
session_unset();
$redirect = "login.php";
header('Location: '.$redirect);
exit();
?>
</body>