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
$q= "SELECT * from investment WHERE id=(SELECT max(id) FROM investment WHERE EMPCDkey = '$_SESSION[userkey]')";
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

<h1>Last Investment</h1>
<br>

<table style="width:100%">
<tr>
  <td>EMPCD Key</td>
  <td><?php echo $r['EMPCDkey']; ?></td>
</tr>
<tr>
<td>HRENT</th>
<td><?php echo $r['hrent'] ; ?></th>
</tr>
<tr>
<td>NSR</th>
<td><?php echo $r['nsr']; ?></th>
</tr>
<tr>
<td>PPf</th>
<td><?php echo $r['ppf']; ?></th>
</tr>
<tr>
<td>LIC</th>
<td><?php echo $r['lic']; ?></th>
</tr>
<td>M.F</th>
<td><?php echo $r['mf'] ; ?></th>
</tr>
<tr>
<td>J.Fee</th>
<td><?php echo $r['jfee']; ?></th>
</tr>
<tr>
<td>NPS</th>
<td><?php echo $r['nps']; ?></th>
</tr>
</table>


<h3>House Tax</h3>
<table style="width:100%">
<tr>
<td>Prin</th>
<td><?php echo $r['prin']; ?></th>
</tr>
<tr>
<td>INT</th>
<td><?php echo $r['in1']; ?></th>
</tr>
</table> 


<h3>High Ed</h3>
<table style="width:100%">
<tr>
<td>Pr</th>
<td><?php echo $r['pr']; ?></th>
</tr>
<tr>
<td>INT</th>
<td><?php echo $r['in2']; ?></th>
</tr>
</table> 





<br>
<a href="user.php"><button>Home</button></a>
<br>
<a href="logout.php"><button>Log Out</button></a>


</body>
</html>