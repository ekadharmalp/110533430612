<!DOCTYPE html>
<html>
	<head>
		<title> Halaman Login </title>
		<!-- <link href="style.css" type="text/css" rel="stylesheet"/> -->
		
		<!--Load CSS-->
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap-responsive.min.css"/>
		<!--Load jQuery-->
		<script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
	</head>
	<body>
		<h3>..... Autentifikasi Akun ..... </h3>
		<form name="formlogin" method="post" action="login_code.php">
			<font class="text">Username </font> : <input type="text" name="username" value="" class="span2"/><br/>
			<font class="text" style="margin-right:3px;"> Password </font> : <input type="password" name="password" value="" class="span2"/><br/>
			<input type="submit" name="submit" value="LOG IN" class="btn"/>
		</form>
		<!--Load Bootstrap JS ( Diletakan dibawah merupakan rekomendasi,agar proses load page lebih cepat )-->
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>