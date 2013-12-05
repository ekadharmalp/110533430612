<!DOCTYPE HTML>
<html>
	<head>
		<title>Pengurutan Data</title>
		<!--Load CSS-->
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap-responsive.min.css"/>
		<!--Load jQuery-->
		<script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
	</head>
	<body>
		<div class="container">
			<h2>Pengurutan Data</h2>
			<?php
				require_once './koneksi.php';
				if(isset($_GET['do'])){
					$do		= $_GET['do'];
					if($do == 'no'){
						$sql	= "SELECT * FROM mahasiswa ORDER BY nim";
						$res	= mysql_query($sql);
					}else if($do == 'name'){
						$sql	= "SELECT * FROM mahasiswa ORDER BY nama";
						$res	= mysql_query($sql);
					} else if($do == 'alamat'){
						$sql	= "SELECT * FROM mahasiswa ORDER BY alamat";
						$res	= mysql_query($sql);
					} 
				}else {
					$sql	= "SELECT * FROM mahasiswa";
					$res	= mysql_query($sql);
				}
			?>
			<form name="form1" method="get">
				<table class="table">
					<tr>
						<th>#</th>
						<th><a href="tugas_prak.php?do=no">NIM</a></th>
						<th><a href="tugas_prak.php?do=name">Nama</a></th>
						<th><a href="tugas_prak.php?do=alamat">Alamat</a></th>
					</tr>
				<?php
					$i = 1;
					while ($row = mysql_fetch_row($res)) { ?>
						<tr>
							<td><?php echo $i;?></td>
							<td><?php echo $row[0];?></td>
							<td><?php echo $row[1];?></td>
							<td><?php echo $row[2];?></td>
						</tr>
						<?php
						$i++;
					}
					?>
				</table>
			</form>
		</div>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>