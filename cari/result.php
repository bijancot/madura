<?php
mysql_connect("localhost","root","") or die("Gagal menghubungi server");
mysql_select_db("db_identitas") or die("Gagal menghubungi database");


$cari = $_POST['cari'];
$query = mysql_query("SELECT * FROM tabel_nilai WHERE ('nama' LIKE '%".$cari."%')");
?>
<html>
	<head>
		<title>Tugas akhir</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="conf/css/materialize.min.css">
	</head>
	<style>
	.we{
		margin-top:100px !important;
		border:#26a69a solid !important;
		padding-left: 10px !important;
	}
	.ow{
		margin-top:20px;
	}
	body{
	background:url(ok.jpg);
	}
	.bjn{
	padding-right:5px;
	}
	.jan{
	margin:190px auto;
	}
	.wong{
	padding-top:10px;
	padding-left:10px;
	padding-right:10px;
	padding-bottom:0px;
	}
	.btn{
	height:50px;
	width:100%
	}
	.cus{
	padding-top:15px;
	font-size:14px;
	padding-left:22px;
	}
	.cos{
	font-size:14px;
	padding-top:15px;
	}
	.head{
	padding-top:10px;
	font-family:CHERI;
	}	
	@font-face {
	font-family: CHERI;
	src: url(CHERI.ttf);
}
	.owl{
		margin-top:-14px !important;
	}
	.eo{
		background:#f44336;
	}
	.eol{
		margin-top:-20px !important;
		background: #ffebee
	}
	</style>
<body>
<nav class="bjn">
<div class="top-nav fixed">
<a href="#" class="right">cek</a>
</div>
</nav>
<?php
echo  "<div class=\"container jan show-on-large-only hide-on-med-and-down\">";
	echo "<div class=\"card\">";
	echo "<form action=\"result.php\" method=\"POST\">";
	echo "<div class=\"row\">";
		echo "<div class=\"col s1 m1 l1 \">";
		echo "</div>";
		echo "<div class=\"col s10 m10 l10 ow \">";
			$cari = $_POST['cari'];
			$query1 = mysql_query("SELECT * FROM tabel_nilai WHERE nama LIKE '%$cari%'");
				echo "<form action=\"result.php\" method=\"POST\">";
				echo "<input type=\"text\" placeholder=\"cari berdasarkan nama\" name=\"cari\" class=\"we\""; 
				echo "value=\"".$cari."\">";
				echo "</input>";
		echo "</div>
		<div class=\"col s1 m1 l1\">
		</div>
	</div>
	<div class=\"row\">
		<div class=\"col s4 m4 l3\">
		</div>
		<div class=\"col s4 m4 l6\">
			<div class=\"row\">
				<div class=\"col s2 m2 l2\">
				</div>
				<div class=\"col s8 m8 l8\">
					<input type=\"submit\" class=\"btn waves-effect waves-light cos\" value=\"Cari lagi\">
					</input>
					</form>
				</div>
				<div class=\"col s2 m2 l2\">
				</div>
			</div>
		</div>
		<div class=\"col s4 m4 l3\">
		</div>
	</div>
	<div class=\"row\">
		<div class=\"col s1 m1 l1\">
		</div>
		<div class=\"col 110 m10 l10\">
			<h2 style=\"text-align:center\">Search Result</h2>";
	
			$cari = $_POST['cari'];
			$query1 = mysql_query("SELECT * FROM tabel_nilai WHERE nama LIKE '%$cari%'");
			
	while($row=mysql_fetch_array($query1)){
		echo "<div class=\"row eo\">";
			echo "<div class=\"col s4 m4 l4\">";
				echo "<h6>Nama Siswa</h6>";
				echo $row['nama'];
			echo "</div>";
			echo "<div class=\"col s4 m4 l4\">";
				echo "<h6>NISN</h6>";
				echo $row['nis'];
			echo "</div>";
			echo "<div class=\"col s4 m4 l4\">";
				echo "<h6>Kelas</h6>";
				echo $row['kelas'];
			echo "</div>";
		echo "</div>";
		echo "<div class=\"row eol\">";
					echo "<div class=\"col s4 m4 l4\">";
							echo "<h6>Nilai Pelajaran Produktif</h6>";
								echo "<ul>";
									echo "<li>Keamanan Jaringan : ".$row['produktif_kj']."</li>";
									echo "<li>Jaringan Nirkabel : ".$row['produktif_jn']."</li>";
									echo "<li>Sistem Operasi Jaringan : ".$row['produktif_soj']."</li>";
								echo "</ul>";
					echo "</div>";
					echo "<div class=\"col s4 m4 l4\">";
							echo "<h6>Nilai Pelajaran Wajib</h6>";
								echo "<ul>";
										echo "<li>Matematika : ".$row['wajib_mat']."</li>";
										echo "<li>Bahasa Indonesia : ".$row['wajib_bi']."</li>";
										echo "<li>Bahasa Inggris : ".$row['wajib_bing']."</li>";
								echo "</ul>";
					echo "</div>";
					echo "<div class=\"col s2 m2 l2\">";
					echo "</div>";
					echo "<div class=\"col s2 m2 l2\">";
					echo "</div>";
		echo "</div>";
		}; 
	echo "
	<div class=\"col s1 m1 l1\">
	</div> 	
	</div> 	
	</div> 
	</form>
	</div>
</div>";
?>
<?php
echo  "<div class=\"container jan show-on-med-and-down hide-on-large-only\">";
	echo "<div class=\"card\">";
	echo "<div class=\"row\">";
		echo "<div class=\"col s1 m1 l1 \">";
		echo "</div>";
		echo "<div class=\"col s10 m10 l10 ow \">";
			$cari = $_POST['cari'];
			$query1 = mysql_query("SELECT * FROM tabel_nilai WHERE nama LIKE '%$cari%'");
				echo "<form action=\"result.php\" method=\"POST\">";
				echo "<input type=\"text\" placeholder=\"cari berdasarkan nama\" name=\"cari\" class=\"we\""; 
				echo "value=\"".$cari."\">";
				echo "</input>";
		echo "</div>";
		echo "<div class=\"col s1 m1 l1\">";
		echo "</div>";
	echo "</div>";
	echo "<div class=\"row\">";
		echo "<div class=\"col s1 m1 l1\">";
		echo "</div>";
		echo "<div class=\"col s10 m10 l10\">";
			echo "<div class=\"row\">";
				echo "<div class=\"col s12 m12 l12\">";
					echo "<input type=\"submit\" class=\"btn waves-effect waves-light cos\" value=\"Cari Lagi\">";
					echo "</input>";
				echo "</div>";
			echo "</div>";
		echo "</div>";
			echo "</form>";
		echo "<div class=\"col s1 m1 l1\">";
		echo "</div>";
	echo "</div>";
	echo "<div class=\"row\">";
		echo "<div class=\"col s1 m1 l1\">";
		echo "</div>";
		echo "<div class=\"col s10 m10 l10\">";
			echo "<h2 style=\"text-align:center\">Search Result</h2>";
	
			$cari = $_POST['cari'];
			$query1 = mysql_query("SELECT * FROM tabel_nilai WHERE nama LIKE '%$cari%'");
			
	while($row=mysql_fetch_array($query1)){
	echo "<div class=\"row eo\">";
		echo "<div class=\"col s4 m4 l4\">";
			echo "<h6>Nama Siswa</h6>";
			echo $row['nama'];
		echo "</div>";
		echo "<div class=\"col s4 m4 l4\">";
			echo "<h6>NISN</h6>";
			echo $row['nis'];
		echo "</div>";
		echo "<div class=\"col s4 m4 l4\">";
			echo "<h6>Kelas</h6>";
			echo $row['kelas'];
		echo "</div>";
	echo "</div>";
	echo "<div class=\"row eol\">";
		echo "<div class=\"col s6 m6 l6\">";
			echo "<h6>Nilai Pelajaran Produktif</h6>";
				echo "<ul>";
					echo "<li>Keamanan Jaringan : ".$row['produktif_kj']."</li>";
					echo "<li>Jaringan Nirkabel : ".$row['produktif_jn']."</li>";
					echo "<li>Sistem Operasi Jaringan : ".$row['produktif_soj']."</li>";
				echo "</ul>";
		echo "</div>";
		echo "<div class=\"col s6 m6 l6\">";
			echo "<h6>Nilai Pelajaran Wajib</h6>";
				echo "<ul>";
					echo "<li>Matematika : ".$row['wajib_mat']."</li>";
					echo "<li>Bahasa Indonesia : ".$row['wajib_bi']."</li>";
					echo "<li>Bahasa Inggris : ".$row['wajib_bing']."</li>";
				echo "</ul>";
		echo "</div>";
	echo "</div>";
		}; 
	echo "
	<div class=\"col s1 m1 l1\">
	</div> 	
	</div> 		
	</div>
</div>";
?>
<script src="conf/js/jquery-3.0.0.min.js"></script>
		<script src="conf/js/materialize.min.js"></script>
		<script>
			$(document).ready(function(){
				$('.button-collapse').sideNav('');
			});
		</script>
</body>
</html>