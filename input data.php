<?php
mysql_connect("localhost","root","bijan") or die("gagal connect server");
mysql_select_db("db_identitas") or die("gagal connect database");

session_start();
$_SESSION['username'];

$for = $_GET['mapel'];
if (isset($_GET['update'])) {
     echo "<meta http-equiv=Refresh content=\"5;url=input%20data.php?mapel=".$for."\">";
}
?>
<html>
<head>
	<title>Belajar Material Design</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="conf/css/materialize.min.css"/>

<style>
.bjn{
	margin-left: 350px;
	
}
.bijan{
	margin:0 355px !important;
}
.row{
	margin-top:4%; 
}
.ava{
	padding-top: 7px;
}
.nun{
	width:300px;
}
.wong{
height:30px !important;
margin:0px !important;
}
.wing{
padding:10px;
}
input{
	margin-top: -15px !important; 
}
.ko{
	margin-top: 5px;
}
.bjnbtn{
	margin-top:10px;
}
.alert {
    padding: 20px;
    background-color: #f44336;
    color: white;
    opacity: 1;
    transition: opacity 0.6s;
    margin-bottom: 15px;
}

.alert.success {background-color: #4CAF50;
margin-top: 20px;
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
.nan{
	height: 96px;
}
em{
	font-size: 12px;
}
.nen{
	height: 38px;
}
.nen:hover{

}
.lol{
	font-size:11px;
}
</style>
</head>

<body>
<ul id="bjndropdown" class="dropdown-content olo" style="margin-top:64px;">
			<li><a href="#" class="lolo"><?php 
			$username = $_SESSION['username'];
			if( !isset($_SESSION['username']))
			{
			echo "not found";
			header('location:invald.php');
			}
			else{
			mysql_connect("localhost","root","bijan") or die("gagal");
			mysql_select_db("db_identitas") or die("gagal");
			$sql = mysql_query("SELECT * FROM tabel_guru WHERE username=\"$username\"");
			while($row=mysql_fetch_array($sql)){
				echo $_SESSION['username']."<p class=\"jan\">(".$row['nama'].")</p>";
			}
			}
			?>
			</a>
			</li>
			<li><a href="logout.php">logout</a></li>
		</ul>
<nav>
	<div class="top-nav fixed">
		<a href="panel.php" class="brand-logo bjn hide-on-med-and-down" >Panel Nilai Murid</a>
		<a href="panel.php" class="brand-logo center show-on-med-and-down hide-on-large-only"  >Panel Nilai Murid</a>
		<a href="#" data-activates="mobile-menu" class="button-collapse">
			<img class="ava" src="more_wh.png"></img>
		</a>
		<div class="show-on-large-only hide-on-med-and-down">
		<a href="#" class="right ava dropdown-button" data-activates="bjndropdown"><img src="ava.png"></a>
		</div>
</div>

	<div class="side-nav fixed">
	<ul class="left hide-on-med-and-down">
			<li class="nan"><img src="logo1.png" class="img-responsive" height="240px"></li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li class="nun"><a href="lihat%20data.php">Lihat Data</a></li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
				<li>&nbsp;</li>
			<li class="nen"><a href="#!"><em>&copy; 2016 Bijan & Wongko ALL RIGHT RESERVED</em></a></li>
		</ul>
	</div>
	<ul class="side-nav left" id="mobile-menu">
			<li class="nan"><img src="logo1.png" class="img-responsive" height="250px"></li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li class="nun"><a href="lihat%20data.php">Lihat Data</a></li>
			<li class="nun"><a href="logout.php">Logout</a></li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
				<li>&nbsp;</li>
			<li class="nen"><a href="#!"><em>&copy; 2016 Bijan & Wongko ALL RIGHT RESERVED</em></a></li>
		</ul>
	</nav> 	
	<div class="container bijan show-on-large-and-med-only hide-on-med-and-down">
		<?php
	$update = isset($_GET['update']);
if ($update=="true") {
echo "<div class=\"alert success\">";
  echo "<span class=\"closebtn\">&times;</span>";  
  echo "<strong>Success!</strong> Data telah diupdate.";
echo "</div>";
}
else{
	echo " ";
}
	?>
		<h3 align="left">Input Nilai Siswa</h3>
		<ul class="collection">
			<li class="collection-item">
				<div class="row wong">
					<div class="col s3 m3 l3">
						NIS
					</div>
					<div class="col s3 m3 l3">
						Nama
					</div>
					<div class="col s3 m3 l3">
						Kelas
					</div>
					<div class="col s3 m3 l3">
						Nilai
					</div>
				</div>
			</li>
			<form action="nilai.php?mapel=<?php echo $_GET['mapel']?>" method="post">
						<?php
						mysql_connect("localhost","root","bijan") or die("gagal connect database");
mysql_select_db("db_identitas") or die("gagal menghubungi databasse");
$query = mysql_query("SELECT * FROM tabel_nilai order by nis asc");
$o=  mysql_num_rows($query);
			$i=0;
			while($row=mysql_fetch_array($query)){
			echo "<li class=\"collection-item\">";
				echo "<div class=\"row wong\">";
					echo "<div class=\"col s3 m3 l3 ko\">";
						echo $row['nis'];
					echo "</div>";
					echo "<div class=\"col s3 m3 l3 ko\">";
						echo $row['nama'];
					echo "</div>";
					echo "<div class=\"col s3 m3 l3 ko\">";
						echo $row['kelas'];
					echo "</div>";
					$var= $_GET['mapel'];
					echo "<div class=\"col s3 m3 l3\">";
					echo "<input type=\"text\" placeholder=\"nilai\" name='nilai[$i]' value='".$row[$var]."' />";
					echo "<input type=\"hidden\" name=\"nis[$i]\" value='".$row['nis']."' />";
					echo "</div>";
				echo "</div>";
			echo "</li>";
++$i;
		};
			?>
			<div class="bjnbtn left">
			<li class="collection-item">
				<input type="submit" value="submit" class="btn ko">
			</li>
			</div>
			</form>
		</ul>
	</div>
		<div class="container show-on-small-only hide-on-large-only">
		<?php
	$update = isset($_GET['update']);
if ($update=="true") {
echo "<div class=\"alert success\">";
  echo "<span class=\"closebtn\">&times;</span>";  
  echo "<strong>Success!</strong> Data telah diupdate.";
echo "</div>";
}
else{
	echo " ";
}
	?>

		<h3 align="right">Input Nilai Siswa</h3>
		<ul class="collection">
			<li class="collection-item">
				<div class="row wong">
					<div class="col s6 m6 l6">
						Nama
					</div>
					<div class="col s6 m6 l6">
						Nilai
					</div>
				</div>
			</li>
			<form action="nilai.php?mapel=<?php echo $_GET['mapel']?>" method="post">
						<?php
						mysql_connect("localhost","root","bijan") or die("gagal connect database");
mysql_select_db("db_identitas") or die("gagal menghubungi databasse");
$query = mysql_query("SELECT * FROM tabel_nilai order by nis asc");
$o=  mysql_num_rows($query);
			$i=0;
			while($row=mysql_fetch_array($query)){
			echo "<li class=\"collection-item lol\">";
				echo "<div class=\"row wong\">";
					echo "<div class=\"col s6 m6 l6 ko\">";
						echo $row['nama'];
					echo "</div>";
					$var = $_GET['mapel'];
					echo "<div class=\"col s6 m6 l6\">";
					echo "<input type=\"text\" placeholder=\"nilai\" name='nilai[$i]' value='".$row[$var]."' />";
					echo "<input type=\"hidden\" name=\"nis[$i]\" value='".$row['nis']."' />";
					echo "</div>";
				echo "</div>";
			echo "</li>";
++$i;
		};
			?>
		<div class="bjnbtn left">
			<li class="collection-item">
				<input type="submit" value="submit" class="btn ko">
			</li>
			</div>
			<li class="collection-item"></li>
			</form>
		</ul>
	</div>
		<script src="conf/js/jquery-3.0.0.min.js"></script>
		<script src="conf/js/materialize.min.js"></script>
		<script>
			$(document).ready(function(){
				$('.button-collapse').sideNav('');
			});
		</script>
		<script>
			var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}
		</script>
</body>
</html>