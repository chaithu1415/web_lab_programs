<?php
	echo "Chaithanya C</br>";
	echo "1CR17CS030</br>";
	echo "</br>";
	$file="6b.txt";
	$a=strval(file_get_contents($file));
	$b=strlen($a);
	$c=strrev($a);
	$data=array($a,$b,$c);
	file_put_contents($file, "\nString: ".implode('-->',$data)." \n",FILE_APPEND|LOCK_EX);
	echo "String:".$a;
	echo "</br>Length:".$b;
	echo "</br>Reverse:".$c;
?>