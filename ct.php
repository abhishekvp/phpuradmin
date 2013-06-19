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
<table>
<form name ="ctf" method="post" action="ctf.php">
<tr><th><h1>
Table Details</h1> </th></tr>
<?php
session_start();
$_SESSION['tnm']=$_POST['tnm'];
$_SESSION['n']=$_POST['n'];
$n=$_POST['n'];
$tnm=$_POST['tnm'];

$i=1;
while($n>0)
{
 echo("<tr><td>Field ".$i." :</td><td><input type=text size=30 name =f".$i."></td><td><select name = d".$i.">
<option value=integer>INT</option>
<option value=varchar(20)>VARCHAR</option>
</select>
</td>
</tr>
");
$i++;
$n--;
}
?>
</table>
<br>

<input type="submit" value="Submit">
</form>

</div>

</div>

</body>
</html>
