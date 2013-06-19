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

<form name ="update" method="post" action="updateexec.php">
<h1>
Update in Table :
<?php
session_start();
@include("db.php");
if(isset($_SESSION['tnm'])) {
  $tnm=$_SESSION['tnm'];
  echo $tnm.'</h1>';
?>
<table>
<tr><td>Select Field :</td><td><select name="ul">
<?php
  $qry="show columns from $tnm";
  $r=mysql_query($qry);
  $res=mysql_fetch_array($r);
  while($res) {
    echo('<option value='.$res[0].' >'.$res[0].'</option>');
    $res=mysql_fetch_array($r);
  }
  echo('</select></td></tr>');
  echo('<tr><td>Old Value : </td><td><input type="text" name="ov" size=30></td></tr>');
  echo('<tr><td>New Value : </td><td><input type="text" name="nv" size=30></td></tr>');
  echo('</table><input type="submit" value="Submit" >');
}
else {
 header('Location:index.php?id=No Table selected for Updation !');
}

?>

<br>
<a href=index.php><h2>Home</h2><a>
</div>

</div>

</body>
</html>
