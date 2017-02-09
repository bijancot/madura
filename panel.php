<html>
<head>
<?php
session_start();
?>
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
.jan{
	font-size: 0.75em;
}
.olo{
	width:200px !important;
}
.lolo{
	font-size: 1em !important;
}
.pointer:hover{

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
.box.canvas{
	width:100% !important;
}
.loko{
	height:450px;
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
				$nama=$row['nama'];
				echo $_SESSION['username']."<p class=\"jan\">(".$nama.")</p>";
			}
			}
			?>
			</a>
			<li><a href="lihat%20data.php">Logout</a></li>
			</li>
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
			<li class="nan"><img src="logo1.png" class="img-responsive" height="250px"></li>
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
			<li class="nen"><a href="#!"><em>&copy; 2016 Bijan & Wongko ALL RIGHT RESERVED</em></a></li></ul>
	</div>
	<ul class="side-nav left" id="mobile-menu"> 	
			<<li class="nan"><img src="logo1.png" class="img-responsive" height="250px"></li>
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
			<li class="nen"><a href="#!"><em>&copy; 2016 Bijan & Wongko ALL RIGHT RESERVED</em></a></li></ul>
	</nav>
		<div class="container bijan hide-on-med-and-down">
			<div class="row">
				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-light">
						<img src="xii.png" class="responsive-img activator"/>
						</div>
						<div class="card-content">
							<span class="card-title">Input Nilai Kelas XII <img class="right activator pointer" src="more.png"></span>
						</div>
							<div class="card-reveal">
							<span class="card-title">Input Nilai Kelas XII <i class="right" style="font-size: 14px">keluar</i></span>
								<p>
									<?php
										mysql_connect("localhost","root","bijan") or die("gagal");
										mysql_select_db("db_identitas") or die("gagal");

										$sql=mysql_query("SELECT * FROM tabel_mapel WHERE guru=\"$nama\"");
										while($row=mysql_fetch_array($sql)){
											echo "<a href=input%20data.php?mapel=".$row['mapel']."> Input Nilai Produktif ".$row['mapel']."</a><br/>";
										}
										?>
								</p>
						</div>
					</div>
				</div>
				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-light">
						<img src="xi.png" class="responsive-img activator"/>
						</div>
						<div class="card-content">
							<span class="card-title">Input Nilai Kelas XI <img class="right activator pointer" src="more.png"></span>
						</div>
							<div class="card-reveal">
							<span class="card-title">Input Nilai Kelas XI <i class="right" style="font-size: 14px">keluar</i></span>
								<p class="center">
								<br/>
								<br/>
								<br/>
								<br/>
								belum tesedia
								</p>
						</div>
					</div>
				</div>
				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-light">
						<img src="x.png" class="responsive-img activator"/>
						</div>
						<div class="card-content">
							<span class="card-title">Input Nilai Kelas X <img class="right activator" src="more.png"></span>
						</div>
							<div class="card-reveal">
							<span class="card-title">Input Nilai Kelas X <i class="right" style="font-size:14px;">keluar</i></span>
								<p class="center">
								<br/>
								<br/>
								<br/>
								<br/>
								belum tesedia
								</p>
						</div>
					</div>
				</div>
				<div class="col s12 ml4">
				<div class="card loko">
						<div class="card-content">
							<span class="card-title" text-align="center">Grafik Nilai</span>
							<p class="center"><br>
							<br>
							<br>
							<br>
							<br>
							<br>Belum Tersedia
							</p>
						</div>
					</div>
				</div>
				</div>
				</div>
		</div>
		<div class="container show-on-med-and-down hide-on-large-only">
			<div class="row">
				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-light">
						<img src="xii.png" class="responsive-img activator"/>
						</div>
						<div class="card-content">
							<span class="card-title">Input Nilai Kelas XII <img class="right activator" src="more.png"></span>
						</div>
						<div class="card-reveal">
							<span class="card-title">Input Nilai Kelas XII <i class="right">keluar</i></span>
								<p>
									<?php
										mysql_connect("localhost","root","bijan") or die("gagal");
										mysql_select_db("db_identitas") or die("gagal");

										$sql=mysql_query("SELECT * FROM tabel_mapel WHERE guru=\"$nama\"");
										while($row=mysql_fetch_array($sql)){
											echo "<a href=input%20data.php?mapel=".$row['mapel']."> Input Nilai Produktif ".$row['mapel']."</a><br/>";
										}
										?>
								</p>
						</div>
					</div>
				</div>
				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-light">
						<img src="xi.png" class="responsive-img activator"/>
						</div>
						<div class="card-content">
							<span class="card-title">Input Nilai Kelas XI <img class="right activator pointer" src="more.png"></span>
						</div>
							<div class="card-reveal">
							<span class="card-title">Input Nilai Kelas XI <i class="right">keluar</i></span>
								<p>
									<>
								</p>
						</div>
					</div>
				</div>
				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-light">
						<img src="x.png" class="responsive-img activator"/>
						</div>
						<div class="card-content">
							<span class="card-title">Input Nilai Kelas X <img class="right activator" src="more.png"></span>
						</div>
							<div class="card-reveal">
							<span class="card-title">Input Nilai Kelas X <i class="right">keluar</i></span>
								<p>
									<>
								</p>
							</div>
					</div>
				</div>
				<div class="col s12 ">
					<div class="card">
						<div class="card-image waves-effect waves-light">
						<img src="bijan.jpg" class="responsive-img activator"/>
						</div>
						<div class="card-content">
							<span class="card-title">Bijan cantik <img class="right activator" src="more.png"></span>
						</div>
							<div class="card-reveal">
							<span class="card-title">Bijan cantik <i class="right">keluar</i></span>
								<p>
									<>
								</p>
							</div>
					</div>
				</div>
			</div>
</div>
		<script src="conf/js/jquery-3.0.0.min.js"></script>
		<script src="conf/js/materialize.min.js"></script>
		<script>
			$(document).ready(function(){
				$('.button-collapse').sideNav('');
			});
		</script>
</body>
</html>