<?php
	$sel = 10;
	$kolom = 3;
	echo"
	SEL: $sel
	<br/>
	KOL: $kolom
	<br/> 
	";
	$x = $sel/$kolom;
	$y = $sel%$kolom;
	echo"<table>";
	$num = 1;
	for($a=1; $a<=$x; $a++){
		echo"<tr>";
		for($b=1; $b<=$kolom; $b++){
			echo"<td> $num <td>";
			$num++;	
		}
		echo"</tr>";
	}
	if($y>0){
		echo"<tr>";
		for($b=1; $b<=$y; $b++){
			echo"<td> $num <td>";
			$num++;	
		}
		echo"</tr>";
	}
		
	echo"</table>";
?>
<style>
td{
	border: solid 2px;
	padding: 1px 15px 1px 15px; 
}
</style>
