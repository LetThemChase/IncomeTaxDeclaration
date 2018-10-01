<!DOCTYPE html>
<?php 
#session start
session_start();
if(isset($_SESSION['userkey'])){
    header('Location: user.php');
}
?>
<?php

#DB connection
$dbc = mysqli_connect('localhost','mayank1','password','incomtax');



?>

<html>
<head>
<title>Income Tax</title>
</head>
<body>

<h1>Welcome To Income Tax Website</h1>
<br>
<a href="login.php"><button>Log In</button></a>

<br>
<a href="register.php"><button>Register</button></a>

</body>
</html>