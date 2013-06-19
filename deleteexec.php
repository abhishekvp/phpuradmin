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
$c=$_POST['dl'];
$v=$_POST['v'];
$sql="delete from $tnm where $c='$v'";
$res=mysql_query($sql);
echo "SQL Query : ".$sql;
$r=mysql_query($sql);
if($r) {
  echo('<br><br><h1>');
  echo("Row Successfully Deleted !</h1>");
}
else {
  echo('<br><br><h1>');
  echo"Row Deletion failed !</h1>";
}
?>

<br>
<a href=index.php><h2>Home</h2><a>
</div>

</div>

</body>
</html>
