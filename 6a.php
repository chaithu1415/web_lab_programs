<?php
	echo "Chaithanya C</br>";
	echo "1CR17CS030</br>";
	$file="6a.txt";
	$count=strval(file_get_contents($file));
	$count=(int)$count;
	file_put_contents($file,$count+1);
	echo "you are visitor number: ".$count;
?>