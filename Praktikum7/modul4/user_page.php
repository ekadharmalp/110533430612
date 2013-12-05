<?php 
	session_start();
	if(!isset($_SESSION['username'])){
		header("location:login_page.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Halaman User </title>
	</head>
	<body>
		<p> Selamat datang, <?php echo $_SESSION['username'];?></p>
		<a href="logout.php">logout</a>
	</body>
</html>