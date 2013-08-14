<?php
session_start();
@include("db.php");
if(isset($_GET['id'])) {
	$tnm=$_GET['id'];
	if (strpos($tnm,md5($_SESSION['passkey'])) !== false) {
		$tnm= base64_decode(str_replace(md5($_SESSION['passkey']),"",$tnm));
		$sql="drop table $tnm";
		mysql_query("$sql");
	}
}
$_SESSION['passkey']='';
header('location:index.php');
?>

