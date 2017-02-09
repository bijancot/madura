<?php
mysql_connect("localhost","root","") or die("connect gagal");
mysql_select_db("kelas") or die ("gagal connect db");

$username = $_POST['username'];
$password = md5($_POST['password']);
?>