
<?php
session_start();
@include("db.php");
$opt=$_POST['opt'];
$tnm=$_POST['tnm'];
$_SESSION['tnm']=$tnm;
if($opt=="ins") {
  header('Location:insert.php');
}
else if($opt=="upd") {
  header('Location:update.php');
}
else {
  header('Location:delete.php');
}

?>

