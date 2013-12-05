<!DOCTYPE html 
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<!--
Algoritma :
1. Start
2. Menampilkan Dropdown
3. Menampilkan seleksi default
4. Pilih Seleksi 
5. Klik tombol OK
6. Tampil Hasil Seleksi

-->
<head> 
<title>Studi Kasus 1</title> 
</head> 
<body> 
<!-- Form action dikasih script untuk menentukan metode yang digunakan untuk mengelolah script PHP dengan Methode POST-->
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
Pekerjaan 
<select name="job"> 
<!--Menentukan Kondisi Seleksi dengan memberi nilai Mahasiswa-->
<option value="Mahasiswa"
<?php if ($_POST['job'] == 'Mahasiswa') {echo ' selected="selected"';} ?> 
> Mahasiswa 

<!--Menentukan Kondisi Seleksi dengan memberi nilai ABRI -->
<option value="ABRI"
<?php if ($_POST['job'] == 'ABRI') {echo ' selected="selected"';} ?> 
>ABRI 

<!--Menentukan Kondisi Seleksi dengan memberi nilai PNS sebagai seleksi default-->
<option value="PNS"
<?php if (!isset($_POST['job']) or $_POST['job'] == 'PNS') {echo 'selected="selected"';}?>
>PNS 

<!--Menentukan Kondisi Seleksi dengan memberi nilai Swasta-->
<option value="Swasta"
<?php if ($_POST['job'] == 'Swasta') {echo ' selected="selected"';}?> 
>Swasta 
</select> 
<br/> 
<!--Membuat tombol ok dengan tipe submit-->
<input type="submit" value="ok" /> 
</form> 

<?php 
//kondisi untuk menampilkan hasil dari inputan seleksi dropdown ketika inputan sudah terisi dan tombol ditekan
if (isset($_POST['job'])) { 
echo $_POST['job']; 
} 
?> 
</body> 
</html> 