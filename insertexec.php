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
session_destroy();
$qry="show columns from $tnm";
$r=mysql_query($qry);
$res=mysql_fetch_array($r);
$i=1;
$sql="INSERT INTO $tnm VALUES(";
while($res) {
  $res=mysql_fetch_array($r);
  $i++;
}
$qry="show columns from $tnm";
$r=mysql_query($qry);
$res=mysql_fetch_array($r);
while($res) {
  if($i==2)
    $sql=$sql.'\''.$_POST[$res[0]].'\')';
  else
    $sql=$sql.'\''.$_POST[$res[0]].'\''.',';
    $res=mysql_fetch_array($r);
    $i--;
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
