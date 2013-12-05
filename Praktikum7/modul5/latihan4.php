<?php
	session_start();
	if(!isset($_SESSION['nama'])){
		header("location:login.php");
	}
	ini_set('display_errors',1);
	// Meng-include file koneksi dan data handler
	require_once './koneksi.php';
	require_once './data_handler.php';
	// Konstanta nama tabel
	define('MHS', 'mahasiswa');
	// Memanggil fungsi data handler
	data_handler('?m=data');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Akses dan Manipulasi Data</title>
		<!--Load CSS-->
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap-responsive.min.css"/>
		<!--Load jQuery-->
		<script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
	</head>
<body>
<div class="container">
</div>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>