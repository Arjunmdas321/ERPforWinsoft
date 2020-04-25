<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
session_start();
$email=$_SESSION['email'];
include("connect.php");
$updt=mysqli_query($connect,"UPDATE login_tbl SET status='0' where email='$email' ");
$updt2=mysqli_query($connect,"UPDATE session_tbl SET out_time=now() where email='$email'");

session_destroy();
header("location:index.php");

?>
</body>
</html>
