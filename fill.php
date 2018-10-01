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



<html>
<head>
<title>User</title>
</head>
<body>

<h1>Fill Investments</h1>


<?php

if($_POST){

    $q= "INSERT INTO investment(EMPCDkey, hrent, nsr, ppf, lic, mf, jfee, nps, prin, in1, pr, in2) values ($_SESSION[userkey], $_POST[hrent], $_POST[nsr], $_POST[ppf], $_POST[lic], $_POST[mfy], $_POST[jfee], $_POST[nps], $_POST[prin], $_POST[in1], $_POST[pr], $_POST[in2])";
    $r= mysqli_query($dbc,$q);

    if($r){
        echo '<p> Submitted , fill more </P>' ;
    }
}

?>



<form action="fill.php" method="post">
    HRent : <input type="text"  name="hrent"></input>
    <br>
    NSR : <input type="text"  name="nsr"></input>
    <br>
    PPf : <input type="text"  name="ppf"></input>
    <br>
    LIC : <input type="text"  name="lic"></input>
    <br>
    M.F : <input type="text"  name="mfy"></input>
    <br>
    J Fee : <input type="text"  name="jfee"></input>
    <br>
    NPS : <input type="text"  name="nps"></input>
    <br>
    <h3>House Tax</h3>
    Prin : <input type="text"  name="prin"></input>
    <br>
    INT : <input type="text"  name="in1"></input>
    <br>
    <h3>High Ed</h3>
    Pr : <input type="text"  name="pr"></input>
    <br>
    Int : <input type="text"  name="in2"></input>
    <br>
    
    <br>
    <button type="submit">Submit</button>
    <input type="hidden" name="submitted" value="1">
</form>





<br><br><br>
<a href="user.php"><button>Home</button></a>
<br>
<a href="logout.php"><button>Log Out</button></a>


</body>
</html>