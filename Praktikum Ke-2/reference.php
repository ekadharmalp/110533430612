<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.0 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Passing By Reference</title>
</head>

<body>

<?php

function bil(&$i) {
	$i++;
}

$j=7;

bil($j);
echo $j;

?>

</html>
