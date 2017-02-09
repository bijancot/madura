<html>
<?php
mysql_connect("localhost","root","bijan") or die("gagal connect server");
mysql_select_db("db_identitas") or die("gagal connect database");


$sql=mysql_query('SELECT * FROM tabel_siswa ORDER BY nis asc');

session_start();
$_SESSION['username'];
?>
<head>
	<title>Belajar Material Design</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="conf/css/materialize.min.css"/>

<style>
.nan{
	height: 96px;
}
em{
	font-size: 12px;
}
.nen{
	height: 38px;
}
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
padding-left:20px;
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
.bi{
	padding-left:40px;
	#margin-top:-10px !important;
	border: 1px dashed black;
}
.size1{
	font-size:20px;
}
.war{
	background-color: #ffcdd2;
}
.le{
	font-size:12px;
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
			<li><a href="#">cantik</a></li>
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
			<li class="nan"><img src="logo1.png" class="img-responsive" height="230px"></li>
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
			<li class="nen"><a href="#!"><em>&copy; 2016 Bijan & Wongko ALL RIGHT RESERVED</em></a></li>
	</ul>
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
		<div class="container bijan show-on-large-only hide-on-med-and-down">
	<ul class="collapsible" data-collapsible="expandable">
    <li class="header">
	<div class="row wing">
		<div class="col s12 m12 l4">
			Nama
		</div>
		<div class="col s12 m12 l4">
			NISN
		</div>
		<div class="col s12 m12 l4">
			Kelas
		</div>
	</div>
	<hr/>
	</li>
	<?php
	mysql_connect("localhost","root","bijan") or die("gagal connect server");
mysql_select_db("db_identitas") or die("gagal connect database");
$sql=mysql_query('SELECT * FROM tabel_nilai ORDER BY nis asc');

	while($row=mysql_fetch_array($sql)){
	echo "<li>";
     echo "<div class=\"collapsible-header war\">";
	  echo "<div class=\"row wong\">";
	  echo "<div class=\"col s4 m4 l4\">";
	  echo $row['nama'];
	  echo "</div>";
	  echo "<div class=\"col s4 m4 l4\">";
	  echo $row['nis'];
	  echo "</div>";
	  echo "<div class=\"col s4 m4 l4\">";
	  echo $row['kelas'];
	  echo "</div>";
	  echo "</div>";
	  echo "</div>";
       echo "<div class=\"collapsible-body\">";
      		echo "<div class=\"row bi\">";
      			echo "<div class= \"col s4 m4 l4 bi size1\">";
      				echo "<ul>";
      					echo "<li>";
      					echo "Nilai Produktif";
      					echo "</li>";
      					echo "<li>";
      					echo "Keamanan Jaringan : ".$row['produktif_kj'];
      					echo "</li>";
      					echo "<li>";
      					echo "Jaringan Nirkabel : ".$row['produktif_jn'];
      					echo "</li>";
      					echo "<li>";
      					echo "Sistem Operasi Jaringan : ".$row['produktif_soj'];
      					echo "</li>";
      				echo "</ul>";
      			echo "</div>";
      			echo "<div class= \"col s4 m4 l4 bi size1\">";
      				echo "<ul>";
      					echo "<li>";
      					echo "Nilai Pelajaran wajib";
      					echo "</li>";
      					echo "<li>";
      					echo "Matematika : ".$row['wajib_mat'];
      					echo "</li>";
      					echo "<li>";
      					echo "Bhs. Indonesia : ".$row['wajib_bi'];
      					echo "</li>";
      					echo "<li>";
						if($row['wajib_bing']<75){
      					echo "Bhs. inggris : <font style='color:red';>".$row['wajib_bing']."</font>";
      					echo "</li>";
						}
						else{
						echo "Bhs. Inggris : ".$row['wajib_bing'];
      					echo "</li>";
						}
						echo "<li>";
						if($row['mulok_bd']<75){
      					echo "Bhs. Daerah : <font style='color:red';>".$row['mulok_bd']."</font>";
      					echo "</li>";
						}
						else{
						echo "Bhs. Daerah : ".$row['mulok_bd'];
      					echo "</li>";
						}
      				echo "</ul>";
      			echo "</div>";
      			echo "<div class= \"col s4 m4 l4\">";
      			echo "3";
      			echo "</div>";
	      		echo "</div>";
      echo "</div>";
	  echo "</li>";
	};
	?>
  </ul> 	
  </div>
	<div class="container show-on-med-and-down hide-on-large-only">
	<ul class="collapsible " data-collapsible="expandable">
	 <li class="header">
	<div class="row wong">
		<div class="col s6 m6 l6">
			Nama
		</div>
		<div class="col s6 m6 l6">
			Kelas
		</div>
	</div>
	<hr/>
	</li>
	<?php
	mysql_connect("localhost","root","bijan") or die("gagal connect server");
mysql_select_db("db_identitas") or die("gagal connect database");
$sql=mysql_query('SELECT * FROM tabel_nilai ORDER BY nis asc');

	while($row=mysql_fetch_array($sql)){
	echo "<li class=\"le\">";
     echo "<div class=\"collapsible-header war\">";
	  echo "<div class=\"row wong\">";
	  echo "<div class=\"col s6 m6 l6\">";
	  echo $row['nama'];
	  echo "</div>";
	  echo "<div class=\"col s6 m6 l6\">";
	  echo $row['kelas'];
	  echo "</div>";
	  echo "</div>";
	  echo "</div>";
        echo "<div class=\"collapsible-body\">";
      		echo "<div class=\"row bi\">";
      			echo "<div class= \"col s4 m4 l4 bi size1\">";
      				echo "<ul>";
      					echo "<li>";
      					echo "Nilai Produktif";
      					echo "</li>";
      					echo "<li>";
      					echo "100";
      					echo "</li>";
      					echo "<li>";
      					echo "100";
      					echo "</li>";
      					echo "<li>";
      					echo "100";
      					echo "</li>";
      					echo "<li>";
      					echo "100";
      					echo "</li>";
      				echo "</ul>";
      			echo "</div>";
      			echo "<div class= \"col s4 m4 l4 bi size1\">";
      				echo "<ul>";
      					echo "<li>";
      					echo "Nilai Pelajaran wajib";
      					echo "</li>";
      					echo "<li>";
      					echo "100";
      					echo "</li>";
      					echo "<li>";
      					echo "100";
      					echo "</li>";
      					echo "<li>";
      					echo "100";
      					echo "</li>";
      				echo "</ul>";
      			echo "</div>";
      			echo "<div class= \"col s4 m4 l4\">";
      			echo "3";
      			echo "</div>";
	      		echo "</div>";
     echo "</li>";
	};
	?>
  </ul> 	
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