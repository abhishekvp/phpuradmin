<?php
@include("db.php");
if(isset($_GET['id'])) {
  $tnm=$_GET['id'];
  $sql="drop table $tnm";
  mysql_query("$sql");
  header('location:index.php');
}
?>
