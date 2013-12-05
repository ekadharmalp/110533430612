<!DOCTYPE html>
<html>
	<head>
		<title> Login </title>
		<!--Load CSS-->
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap-responsive.min.css"/>
		<!--Load jQuery-->
		<script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="hero-unit">
				<div class="row">
					<div class="span4" style="border-right:1px solid #000;">
						<h4>Isikan username (nama) dan password (nim) anda</h4>
						<form name="form1" action="login_code.php" method="post">
							<div class="row">
								<div class="span4">
									<p>Username <br/> <input type="text" name="nama"/></p>
									<p>Password <br/> <input type="text" name="pass"/></p>
									<p><input type="submit" name="submit" value="Login" class="btn btn-primary btn-large"></p>
								</div>
							</div>
						</form>
					</div>
					<div class="span4" style="width:60%; margin-left:10px;">
						<h1>Selamat Datang !</h1>
						<p>Ini adalah aplikasi login sederhana menggunakan PHP yang diintegrasikan dengan twitter bootstrap. Selamat menggunakan :) </p>
					</div>
				</div>
			</div>
			<!--Load Bootstrap JS ( Diletakan dibawah merupakan rekomendasi,agar proses load page lebih cepat )-->
			<footer></footer>
		</div>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>