<?php
$age=array("p"=>"305","b"=>"371","j"=>"40");
arsort($age);
foreach($age as $x => $x_value) {
	echo "key=" .$x .",value=" .$x_value;
	echo "<br>";
}
?>