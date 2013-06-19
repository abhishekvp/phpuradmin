<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div align="center">
<div id="bg">
</div>
</div>
<div align="center">
<div id="header" align="center">
</div>

<div id="center-content" align="center">

<?php
session_start();
@include("db.php");
$tnm=$_SESSION['tnm'];
$n=$_SESSION['n'];
$_SESSION=array();
$temp=$n;
$temp1=$n;
$i=1;
while($temp>0) {
  $f[$i]=$_POST['f'.$i];
  $d[$i]=$_POST['d'.$i];
  $i++;
  $temp--;
}
$sql = "CREATE TABLE $tnm(";
$i=1;
while($n>0) {
  if($n==1)
    $sql=$sql." ".$f[$i]." ".$d[$i].")";
  else
    $sql=$sql." ".$f[$i]." ".$d[$i].",";
  $n--;
  $i++;
}
echo "SQL Query : ".$sql;
$r=mysql_query($sql);
if($r) {
  echo('<br><br><h1>');
  echo("Transcation Successful !</h1>");
}
else {
  echo('<br><br><h1>');
  echo"Transcation failed !</h1>";
}
?>

<br>
<a href=index.php><h2>Home</h2><a>
</div>

</div>

</body>
</html>
