
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
@include("db.php");
if(isset($_GET['id'])) {
  $tnm=$_GET['id'];
  echo('<h1>'.$tnm.'</h1>');
  $qry="select count(*) from $tnm";
  $r=mysql_query($qry);
  if($r) {
    $i=0;
    $res=mysql_fetch_array($r);
    $count=$res[0];
    $qry="select * from $tnm";
    $r=mysql_query($qry);
    if($count) {
      echo('<table border=1><tr>');
      $q="show columns from $tnm";
      $res1=mysql_query($q);
      $res2=mysql_fetch_array($res1);
      while($res2) {
        echo('<th>'.$res2[0].'</th>');
        $res2=mysql_fetch_array($res1);
      }
      echo('</tr>');
      while($count>0) {
        $result=mysql_fetch_array($r);
        echo ('<tr>');
        while(isset($result[$i])) {
          echo ('<td>'.$result[$i].'</td>');
          $i++;
        }
        echo ('</tr>');
        $count--;
        $i=0;
      }
    echo('</table>');
    }
    else {
      echo('<table border=1><tr>');
      $q="show columns from $tnm";
      $res1=mysql_query($q);
      $res2=mysql_fetch_array($res1);
      while($res2) {
        echo('<th>'.$res2[0].'</th>');
        $res2=mysql_fetch_array($res1);
      }
      echo('</tr>');
      echo('</table>');
      echo "Table is empty !";
    }
  }
}
?>
</table>
<br>
<a href=index.php><h2>Home</h2><a>
</div>

</div>

</body>
</html>
