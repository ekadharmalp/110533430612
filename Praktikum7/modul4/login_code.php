<?php
	session_start();
	$user=$_POST['username'];
	$pass=$_POST['password'];
	if(!empty($user)&&!empty($pass)){
		if($user == "mos" && $pass == "mus"){
			$_SESSION['username'] = $_POST['username'];
			header("location:user_page.php");
		}else{
			echo "username atau password salah<br/>";
			echo "<a href=login_page.php>Kembali ke form login</a>";
		}
	}else{
		echo "mohon diisi<br/>";
		echo "<a href=login_page.php>Kembali ke form login</a>";
	}
?>