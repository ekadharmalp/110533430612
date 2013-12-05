<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<!--

Algoritma :
1. Start
2. Menampilkan Check Box
3. Menampilkan Check Box yang tercentang secara default
4. Centang check box
5. Klik tombol OK
6. Tampil Hasil dari check box yang dicentang

-->
<head>
<title>Studi Kasus 2</title>
</head>
<body>
<!-- Form action dikasih script untuk menentukan metode yang digunakan untuk mengelolah script PHP dengan Methode POST-->
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post"> 
Prestasi SMA Tingkat

<!--Menentukan Kondisi Checkbox dengan memberi nilai Kecamaatan-->
<input type="checkbox" name="prestasi[]" value="Kecamatan" 
<?php
if (isset($_POST['prestasi'])){	
foreach ($_POST['prestasi'] as $key => $val){	
if($val == 'Kecamatan'){
  echo 'checked="checked"';		
   }
  }
 }
?>
/>Kecamatan

<!--Menentukan Kondisi Checkbox dengan memberi nilai Kabupaten-->
<input type="checkbox" name="prestasi[]" value="Kabupaten"
<?php 
if(!isset($_POST['prestasi'])){
  echo ' checked="checked"';}
else if (isset($_POST['prestasi'])){			
foreach ($_POST['prestasi'] as $key => $val){	
 if($val == 'Kabupaten'){			
	echo 'checked="checked"';		
		}
	  }
	}
?>
/>Kabupaten

<!--Menentukan Kondisi Checkbox dengan memberi nilai Provinsi-->
<input type="checkbox" name="prestasi[]" value="Provinsi"
<?php
if (isset($_POST['prestasi'])){	
foreach ($_POST['prestasi'] as $key => $val){
  if($val == 'Provinsi'){			
	echo 'checked="checked"';		
	}
   }
  } 
?> 
/>Provinsi

<!--Menentukan Kondisi Checkbox dengan memberi nilai Nasional-->
<input type="checkbox" name="prestasi[]" value="Nasional"   
<?php
if (isset($_POST['prestasi'])){
foreach ($_POST['prestasi'] as $key => $val){
if($val == 'Nasional'){				
	echo 'checked="checked"';		
	}
   }
 } 
?> 
/>Nasional	
</br>

<!--Membuat tombol ok dengan tipe submit-->
<input type="submit" value="OK" />						
</form>

<?php 
//kondisi untuk menampilkan hasil dari inputan ceckbox ketika inputan sudah tercentang dan tombol ditekan
if (isset($_POST['prestasi'])){		
	foreach ($_POST['prestasi'] as $key => $val){
		echo 'prestasi '.$key.' : '.$val.'<br />';
		}
	}
?>
</body>
</html>