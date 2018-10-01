<!DOCTYPE html>
<?php
session_start(); 
if(isset($_SESSION['userkey'])){
    header('Location: user.php');
}
?>

<?php
#DB connection
$dbc = mysqli_connect('localhost','mayank1','password','incomtax');

if($_POST){
#query run
$q= "SELECT * from user WHERE EMPCDkey = '$_POST[key]' AND password =SHA1('$_POST[password]')";
$r= mysqli_query($dbc,$q);

#check
if(mysqli_num_rows($r)==1){

    $_SESSION['userkey']=$_POST['key'];
    header('Location: index.php');
}
}

?>

<html>
<head>
<title>Log In</title>
</head>
<body>

<h1>Log In</h1>
<br>
<form action="login.php" method="post">
    EMPCD key : <input type="text" id ="key" name="key"></input>
    <br>
    Password : <input type="password" id="password" name="password"></input>
    <br>
    <br>
    <button type="submit">LogIn</button>
</form>

</body>
</html>