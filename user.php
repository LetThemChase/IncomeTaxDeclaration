<!DOCTYPE html>
<?php 
#session start
session_start();
if(!isset($_SESSION['userkey'])){
    header('Location: index.php');
}
?>
<?php

#DB connection
$dbc = mysqli_connect('localhost','mayank1','password','incomtax');

?>

<?php 
$q= "SELECT * from user WHERE EMPCDkey = '$_SESSION[userkey]'";
$res= mysqli_query($dbc,$q);
$r=mysqli_fetch_assoc($res);
?>

<html>
<head>
<title>User</title>
<style>table, th, td {
    border: 1px solid black;
}</style>
</head>
<body>

<h1>Welcome User</h1>
<br>

<table style="width:100%">
<tr>
  <td>EMPCD Key</td>
  <td><?php echo $r['EMPCDkey']; ?></td>
</tr>
<tr>
<td>Name</th>
<td><?php echo $r['Name'] ; ?></th>
</tr>
<tr>
<td>Date Of Birth</th>
<td><?php echo $r['DOB']; ?></th>
</tr>
<tr>
<td>Pan No</th>
<td><?php echo $r['PanNo']; ?></th>
</tr>
<tr>
<td>State</th>
<td><?php echo $r['State']; ?></th>
</tr>
</table> 
<br>
Fill Investments <a href="fill.php"><button>Fill</button></a>

<br>
See last investments<a href="see.php"><button>see</button></a>


<br><br><br>
<a href="logout.php"><button>Log Out</button></a>


</body>
</html>