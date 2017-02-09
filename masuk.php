<?php
mysql_connect("localhost","root","bijan") or die("connect gagal");
mysql_select_db("db_identitas") or die ("gagal connect db");

$user = $_POST['username'];
$password = md5($_POST['password']);


$sql= mysql_query ("SELECT * FROM tabel_guru WHERE username='$user' and password='$password'");
$qow= mysql_num_rows($sql);

if($qow=="1")
{
session_start();
$_SESSION["username"] = $user;
header('location: panel.php');
echo "berhasil";
}
elseif($qow==0){
echo "gagal";
session_start();
$_SESSION['data'] = "errno1";
header('location: invald.php');
}

?>