<!DOCTYPE html>
<html>
<!--
Algoritma :
1. Start
2. Input username dan password
3. jika username dan password benar maka akan muncul pesan selamat datang
4. Jika username dan password kosong maka ada pesan peringatan
5. jika username dan password diisi selain huruf maka ada pesan peringatan
6. End 

-->

<!--Script Javascript -->
<script language="JavaScript">
	//fungsi untuk mengecek validasi yang inputan hanya bisa diisi huruf
	function cekuser(a) {
	kar = /^[A-Za-z]{1,}$/;<!--username harus berupa huruf,--!>
	return kar.test(a);
	}
	
	function Login(){
		//pendeklarasi variabel username yang diambil dari tekxtbox username
        var username=document.login.username.value;
        //pendeklarasi variabel password yang diambil dari tekxtbox password
        var password=document.login.password.value;
        
            if(username== "" && password == ""){ //kondisi jika textbox username dan password dikosongi
				alert("Username dan Password harus diisi!");
				document.forms.login.username.focus();
			}
			else if(password == ""){//kondisi jika textbox  password dikosongi
				alert("Password harus diisi!");
				document.forms.login.password.focus();
			}			
			else if(username == ""){//kondisi jika textbox username dikosongi
				alert("Username harus diisi!");
				document.forms.login.username.focus();
			}
			else if((!cekuser(username)) && (!cekuser(password))){//kondisi jika username dan password diinput selain huruf
				alert("Username dan Password harus huruf!");
			}
			else if(!cekuser(username)){//kondisi jika username diinput selain huruf
				alert("User harus huruf!");
			}
			else if(!cekuser(password)){//kondisi jika password diinput selain huruf
				alert("Password harus huruf!");
			}
		}
        </script>
		
<head>
<title>Login</title>

<style type="text/css">

/*script css*/

/*kelas style2 untuk mengatur ukuran huruf, ketebelan, jenis hurug, warna , tingkat transparan*/
.style2 {
	font-size: 24px;
	font-weight: bold;
	font-family: "Bauhaus 93";
	color: #FFCC00;
	opacity : 1;
}
/*kelas style10 untuk mengatur ukuran huruf, ketebelan, jenis huruf*/
.style10 {font-family: "Aharoni"; font-size: 14; }
/*id putih untuk mengatur tingkat transparan*/
#putih {opacity : 0.9;}
/*id umum untuk mengatur tingkat transparan*/
#umum { opacity : 1;}
/*id atas untuk mengatur tingkat transparan*/
#atas{
	opacity : 0.9;
}
/*id style11 untuk mengatur ukuran huruf*/
.style11 {font-size: 14}

</style>

</head>
<body background="1506192.jpg" width="1340" height="500">
<!-- Form yang dikendalikan oleh script PHP dengan metode POS-->
<form name="login" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<div class="login">
<table border="0" cellspacing="0" cellpadding="0" align="center" width="1340px">
	
<!--Mengatur kotak login dan letak kotak login-->
	<tr height= "150px">
		<td width="510px" align="left"><img src="title.png" width ="380" height="90" align="left"></td>
		<td width="25px"></td>
		<td width="260px"></td>
		<td width="25px"></td>
		<td width="510px">  </td>
	</tr>
		
		<tr id="atas" height= "50px">
		<td width="510px" height="48" id="atas"> </td>
		<td id="atas" width="25px" bgcolor="#6F6F6F"> </td>
		<td id="atas" width="260px" bgcolor="#6F6F6F" align="center" style="color:#141414; font-size:24px;"> <span class="style2" style="opacity : 1;">Login to Your Account</span></td>
		<td id="atas" width="25px" bgcolor="#6F6F6F"> </td>
		<td id="atas" width="510px"></td>
	</tr>
		<tr id="putih" height= "25px">
		<td id="putih" width="510px"> </td>
		<td id="putih" width="25px" bgcolor="#FFFFFF"> </td>
		<td id="putih" width="260px" bgcolor="#FFFFFF"> </td>
		<td id="putih" width="25px" bgcolor="#FFFFFF"> </td>
		<td id="putih" width="510px">  </td>
		</tr>
		
		<tr id="putih" height= "25px">
		<td id="putih" width="510px" height="20"> </td>
		<td id="putih" width="25px" bgcolor="#FFFFFF"> </td>
		<td id="putih" width="260px" bgcolor="#FFFFFF" ><span class="style10" style= "opacity : 1">Username</span></td>
		<td id="putih" width="25px" bgcolor="#FFFFFF"> </td>
		<td id="putih" width="510px">  </td>
		</tr>
		
		<tr id="putih"height= "50px">
		<td id="putih" width="510px" height="40"> </td>
		<td id="putih" width="25px" bgcolor="#FFFFFF"> </td>
		<!--Membuat teksbox isian username-->
		<td id="putih" width="260px" bgcolor="#FFFFFF"> <span id="umum"><input name="username" type="text" size="35px" style="background-color:#FFCC00; border-color: #FFCC00;"></span></td>
		<td id="putih" width="25px" bgcolor="#FFFFFF"> </td>
		<td id="putih" width="510px">  </td>
	</tr>
		<tr id="putih" height= "25px">
		<td id="putih" width="510px"> </td>
		<td id="putih" width="25px" bgcolor="#FFFFFF"> </td>
		<td id="putih" width="260px" bgcolor="#FFFFFF"><span class="style10">Password</span></td>
		<td id="putih" width="25px" bgcolor="#FFFFFF"> </td>
		<td id="putih" width="510px">  </td>
		</tr>
		
		<tr id="putih" height= "50px">
		<td id="putih" width="510px" height="32"> </td>
		<td id="putih" width="25px" bgcolor="#FFFFFF"> </td>
		<!--Membuat teksbox isian password-->
		<td id="putih" width="260px" bgcolor="#FFFFFF"><input name="password" type="password" size="35px" style="background-color:#FFCC00; border-color: #FFCC00;"></td>
		<td id="putih" width="25px" bgcolor="#FFFFFF"> </td>
		<td id="putih" width="510px">  </td>
	</tr>
	
	<tr id="putih" height= "40px">
		<td id="putih" width="510px"> </td>
		<td id="putih" width="25px" bgcolor="#FFFFFF"> </td>
		<!--Membuat tombol login dengan tipe submit-->
		<td id="putih" width="260px"  bgcolor="#FFFFFF" align="right" style="opacity=0.75;"><input type="submit" value="Login" bgcolor="#6F6F6F" onClick="Login()"></td>
		<td id="putih" width="25px" bgcolor="#FFFFFF"> </td>
		<td id="putih" width="510px">  </td>
	</tr>
	
</table>
</div>
</form>
<?php
//mendeklarasikan variabel username dan password
$nama=$_POST['username'];
$pass=$_POST['password'];
//menentukan username dan password yang bertipe string
if ($nama=="aril" && $pass=="aril"){
//menampilkan pesan selamat datang jika username dan password yang diinput sesuai dengan yang ditentukan
  echo "<script> alert('Selamat Datang '+'$nama'+' di E-School'); </script>" ;
} else  
echo "<script> alert('Gagal Login'); </script>" ;//menampilkan pesan gagal login
?>
</body>
</html>
