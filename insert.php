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


<div id="center-content" >
<div align="center">

<form name ="insert" method="post" action="insertexec.php">
<h1>
Insert in Table :
<?php
session_start();
@include("db.php");
if(isset($_SESSION['tnm'])) {
  $tnm=$_SESSION['tnm'];
  echo $tnm.'</h1>';
?>
<table>

<?php
  $qry="show columns from $tnm";
  $r=mysql_query($qry);
  $res=mysql_fetch_array($r);
  while($res) {
    echo('<tr><td>');
    echo($res[0]."</td>");
    echo('<td><input type=text size=30 name ='.$res[0].'></td></tr>');
    $res=mysql_fetch_array($r);
  }
  echo('</table><input type="submit" value="Submit" >');
}
else {
  header('Location:index.php?id=No Table selected for Insertion !');
}

?>

<br>
<a href=index.php><h2>Home</h2><a>
</div>

</div>

</body>
</html>
