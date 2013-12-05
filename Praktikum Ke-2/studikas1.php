<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.0 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Greeting</title>
</head>

<body>

<?php 

function greeting() 
{ 
$date = date ("G:i"); 
if ($date>=0 and $date <10) { 
echo '<h1>Selamat Pagi</h1>'; 
} else if ($date>=10 and $date<15) { 
echo '<h1>Selamat Siang</h1>'; 
} else if ($date>=18 and $date<24) { 
echo "Selamat Malam"; 
}else echo ""; 
} 
?>


<?php greeting(); ?><br>

</body>
</html>
