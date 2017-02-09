<html>
	<head>
		<title>Tugas akhir</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="conf/css/materialize.min.css">
	</head>
	<style>
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
	</style>
<body>
<nav class="bjn">
<div class="top-nav fixed">
<a href="#" class="right">cek</a>
</div>
</nav>
<div class="container jan show-on-large-only hide-on-med-and-down">
	<div class="card">
	<div class="head">
	<h2 style="text-align:center;">Cari Data Anda Di Sini</h2>
	</div>
	<form action="result.php" method="POST">
	<div class="row">
		<div class="col s1 m1 l1">
		</div>
		<div class="col s10 m10 l10">
		<input type="text" placeholder="cari berdasarkan nama" name="cari">
		</input>
		</div>
		<div class="col s1 m1 l1">
		</div>
	</div>
	<div class="row">
		<div class="col s4 m4 l3">
		</div>
		<div class="col s4 m4 l6">
			<div class="row">
				<div class="col s6 m6 l6">
				<input type="submit" class="btn waves-effect waves-light cos" value="Cari data">
				</input>
				</div>
				<div class="col s6 m6 l6">
				<input type="button" class="btn waves-effect waves-light cos" value="Opsi Lain">
				</input>
	</form>
				</div>
			</div>
		</div>
		<div class="col s4 m4 l3">
		</div>
	</div>
	<div style="text-align:center;padding-bottom:15px;">
	<em>&copy; 2016 Bijan & Wongko ALL RIGHT RESERVED</em>
	</div>
	</div>
</div>
<div class="card">
<div class="container jan show-on-med-and-down hide-on-large-only">
	<div class="head">
	<h5 style="text-align:center;">Cari Data Anda Di Sini</h5>
	</div>
	<div class="row">
		<div class="col s1 m1 l1">
		</div>
		<div class="col s10 m10 l10">
		<form action="result.php" method="POST">
		<input type="text" placeholder="cari berdasarkan nama" name="cari">
		</input>
		</div>
		<div class="col s1 m1 l1">
		</div>
	</div>
	<div class="row">
	
		<div class="col s0 m3 l4">
		</div>
		<div class="col s12 m6 l4">
			<div class="row">
				<div class="col s6 m6 l6">
				<input type="submit" class="btn waves-effect waves-light cus" value="Cari data">
				</input>
				</div>
				<div class="col s6 m6 l6">
				<input type="submit" class="btn waves-effect waves-light cus" value="Opsi Lain">
				</input>
				</form>
				</div>
			</div>
		</div>
		<div class="col s0 m3 l4">
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