<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<script>
function show_confirm(v) {
  var r=confirm("This will delete the selected table ! Press 'OK' to continue or 'Cancel' to abort !");
  if (r==true) {
	window.location.href="deltbl.php?id="+v;
  }
}
</script>
</head>
<body>
<div align="center">
<div id="bg">
</div>
</div>
<div align="center">
<div id="header" align="center">

<h1>
<?php
session_start();
@include("db.php");
if(isset($_GET['id'])) {
  echo($_GET['id']);
}
else
  echo('Welcome to php-you-R-admin');
?></h1>

</div>


<div id="center-content" >
<div align="center">

<form name ="ct" method="post" action="ct.php">

<h1>Create Table </h1><table>
<tr><td>
 Enter Table name :</td><td><input type="text" size=30 name ="tnm"></td></tr>
<tr><td>
Number of Fields :</td><td>
 <select name="n" value="">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
 </select>  
</td>
</tr>
</table>
<br>

<input type="submit" value="Submit">
</form>

</div>
<div align="center">
<table>
<tr>
<th><h1>
Existing tables </h1></th></tr>
<?php
$qry="show tables in ".MY_DB;
$key = time();
$_SESSION['passkey'] = $key;
$r=mysql_query($qry);
$res=mysql_fetch_array($r);
while($res) {
  echo('<tr><td>');
  echo('<a href=display.php?id='.$res[0].'>'.$res[0].'</a></td>');
  echo('<td><button onclick=show_confirm("'.$key.base64_encode($res[0]).'")>Drop</button>');
  echo('</td></tr>');
  $res=mysql_fetch_array($r);
}
?>

</table>
</div>
<div align="center">
<h1>Operations</h1>
<table>

<form name="opt" action="opt.php" method="post">
<tr><td>
Select Operation:</td><td>
<select name="opt" value="">
<option value="ins">Insert</option>
<option value="upd">Update</option>
<option value="del">Delete</option>
</select>
</td><td>Select Table:</td><td>
<?php
$r=mysql_query($qry);
$res=mysql_fetch_array($r);
echo('<select name=tnm value ="">');
while($res) {
  echo('<option value ='.$res[0].'>'.$res[0].'</option>');
  $res=mysql_fetch_array($r);
}

?>
</td>
<td><input type="Submit" value="Submit"></td></form>
</tr>
</table>

</div>
</div>

</div>

</body>
</html>
