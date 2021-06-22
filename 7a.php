<!DOCTYPE html>
	<html>
		<head>
			<title>Digital Clock</title>
			<meta http-equiv="refresh" content="1">
			<style type="text/css">
				p{
					border:5px dashed tomato;margin:0px 700px 700px 700px;padding:7px;background-color:turquoise;
				}
			</style>
		</head>
		<body>
			<?php	
				date_default_timezone_set("ASia/Kolkata");
				echo "<center>Chaithanya C</center>";
				echo "<center>1CR17CS030</center>";
				echo "<center></center>";
				echo "<center>Digital Clock</center>";
				echo "<center><p>".date("h : i : s A")."</p></center>";
			?>
		</body>
	</html>