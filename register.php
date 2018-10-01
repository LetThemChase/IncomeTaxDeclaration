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


?>

<html>
<head>
<title>Register</title>
</head>
<body>

<h1>Register</h1>
<br>
<?php

if($_POST){

    $q= "INSERT INTO user (EMPCDkey, Name, DOB, PanNO, State, password) values ($_POST[EMPCDkey], $_POST[name], $_POST[dob], $_POST[panno], $_POST[state], SHA1('$_POST[pass]'))";
    $r= mysqli_query($dbc,$q);

    if($r){
        echo '<p> Registered </P>' ;
    }
}

?>

<form action="register.php" method="post">
    EMPCD key : <input type="text" name="EMPCDkey"></input>
    <br>
    Name : <input type="text" name="name"></input>
    <br>
    DOB : <input type="date" name="dob"></input>
    <br>
    pan no : <input type="integer" name="panno"></input>
    <br>
    state : <input type="text" name="state"></input>
    <br>
    Password : <input type="password" name="pass"></input>
    <br><br>
    <button type="submit">Register</button>
    <input type="hidden" name="submitted" value="1">
</form>

</body>
</html>