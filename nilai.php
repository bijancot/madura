<?php
session_start();
echo $for = $_GET['mapel'];
mysql_connect("localhost","root","bijan") or die("gagal connect");
mysql_select_db("db_identitas") or die("gagal connect database");

$sql1 = mysql_query("SELECT * FROM tabel_nilai");
echo $hitung = mysql_num_rows($sql1);
echo "<br/>";
$nilai=$_POST['nilai'];
$nis=$_POST['nis'];

for ($i=0;$i<$hitung;$i++){
$sql="UPDATE tabel_nilai  SET $for='$nilai[$i]' WHERE nis='$nis[$i]'";
echo $nilai[$i];
echo "<br/>";
mysql_query($sql);
}
$var = "refresh:0;url=input%20data.php?mapel=".$for."&update=true";
header($var);
?>