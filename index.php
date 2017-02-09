<html>
	<head>
		<title>Tugas akhir</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="conf/css/materialize.min.css">
	</head>
	<style>
	.bjn{
	padding:50px;
	}
	.dia{
	margin:100px auto !important;
	}
	body{
	background:url(bg.png);
	background-size:100%;
	background-repeat:no-repeat;
	background-attachment: fixed;
	background-size: cover;
	}
	</style>
	<body>
		<div class="container dia show-on-large-only hide-on-med-and-down">
		<div class="row">
		<div class="col s3 m3 l3">
		</div>
		<div class="col s6 l6 m6">
			<div class="card bjn z-depth-3">
				<form action="masuk.php" method="POST">
				<br/>
				<div class="center">
		<img src="smk.png" class="responsive-img" height="200px" width="200px"></img>
		</div>
					<div class="input-field col s12">
          <input id="username" type="text" class="validate" name="username">
          <label for="username">Username</label>
        </div>
				<br/><br/>
				<br/><br/>
					<div class="input-field col s12">
          <input id="password" type="password" class="validate" name="password">
          <label for="password">Password</label>
        </div>
		
		<br/>
		<br/>
		<br/>
		<input type="submit" class="btn" value="Login">
		</form>
		</div>
		</div>
		<div class="col s3 m3 l3">
		</div>
		</div>
		<p class="center" style="color:white;"><em>&copy; 2016 Bijan & Wongko ALL RIGHT RESERVED</em></p>
		</div>


<div class="container dia hide-on-large-only show-on-med-and-down">
		<div class="row">
		<div class="col s12 l12 m12">
			<div class="card bjn z-depth-3">
				<form action="masuk.php" method="POST">
				<div class="center">
		<img src="smk.png" class="responsive-img" height="200px" width="200px"></img>
		</div>
					<div class="input-field col s12">
          <input id="username" type="text" class="validate" name="username">
          <label for="username">Username</label>
        </div>
				<br/><br/>
				<br/><br/>
					<div class="input-field col s12">
          <input id="password" type="password" class="validate" name="password">
          <label for="password">Password</label>
        </div>
		
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<input type="submit" class="btn" value="Login">
		</form>
		</div>
		</div>
		</div>
		<p class="center" style="color:white;"><em>&copy; 2016 Bijan & Wongko ALL RIGHT RESERVED</em></p>
		</div>

		</body>
	<script src="conf/js/jquery-3.0.0.min.js"></script>
		<script src="conf/js/materialize.min.js"></script>
		<script>
			$(document).ready(function(){
				$('.button-collapse').sideNav('');
			});
		</script>
</html>