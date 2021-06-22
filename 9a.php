<!DOCTYPE html>
	<html>
		<head>
			<title>Calculator</title>
			<style type="text/css">
				body{
					background-color:lightgreen;font-family:cursive;font-size: 20px;
				}
			</style>
		</head>
		<body>
			<center>
				<h1>Chaithanya C</h1>
				<h1>1CR17CS030</h1>
			<?php
				$states="Mississippi Alabama Texas Massachusetts Kansas";
				$statesList=[];
				$stateArray=explode(" ",$states);
				echo "Original Array<br>";
				foreach($stateArray as $key=>$value) {
					echo("stateArray[$key]:$value<br>");
				}
				foreach($stateArray as $value) {
					if(preg_match('/.*xas$/',$value))
						$statesList[0]=$value;
				}
				foreach($stateArray as $value) {
					if(preg_match('/^k.*s$/i',$value))
						$statesList[1]=$value;
				}
				foreach($stateArray as $value) {
					if(preg_match('/^M.*s$/',$value))
					$statesList[2]=$value;
				}
				foreach($stateArray as $value) {
					if(preg_match('/.*a$/',$value))
						$statesList[3]=$value;
				}
				echo("<b>The Converted Array Is:<br><b>");
					foreach($statesList as $key=>$value) {
						echo("statesList[$key]=$value<br>");
				}
			?>
			</center>
		</body>
	</html>