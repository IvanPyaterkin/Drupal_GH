<?php

$array = array();

for($i = 0; $i <= 9; $i++) {
	$array[$i] = rand();
}

sort($array);

for($i = 0; $i <= 9; $i++) {
	echo $i;	
	echo " = ";
	echo $array[$i];
	echo "<br>";
}

?>