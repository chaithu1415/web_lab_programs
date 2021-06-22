<!DOCTYPE html>
	<html>
		<head>
			<title>Pattern Matching</title>
			<style type="text/css">
				body{
					background-color:lime;
					font-family:cursive;
					font-size:25px;
				}	
			</style>
		</head>
		<body>
			<center>
				<h1>Chaithanya C</h1>
				<h1>1CR17CS030</h1>
				<?php
					$s="Mississippi Alabama Texas Massachusetts Kansas";
					$sl=[];
					$array=explode(" ",$s);
					echo "<br><b>The Original Array Is: <br><br>";
					foreach($array as $key=>$value) {
						echo("array[$key]:$value<br>");
					}
					foreach($array as $value) {
						if(preg_match('/.*xas$/',$value))
							$sl[0]=$value;
					}
					foreach($array as $value) {
						if(preg_match('/^k.*s$/i',$value))
							$sl[1]=$value;
					}
					foreach($array as $value) {
						if(preg_match('/^M.*s$/',$value))
						$sl[2]=$value;
					}
					foreach($array as $value) {
						if(preg_match('/.*a$/',$value))
							$sl[3]=$value;
					}
					echo("<br><b>The Final Converted Array Is:<br><b><br>");
					foreach($sl as $key=>$value) {
						echo("sl[$key]=$value<br>");
					}
				?>
		</center>
	</body>
</html>