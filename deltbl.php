<?php
session_start();
@include("db.php");
if(isset($_GET['id'])) {
  $tnm=$_GET['id'];
  $tnm= base64_decode(str_replace($_SESSION['passkey'],"",$tnm));
  $sql="drop table $tnm";
  mysql_query("$sql");
  $_SESSION['passkey'] = "";
  header('location:index.php');
}
?>
