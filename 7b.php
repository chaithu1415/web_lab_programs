<!DOCTYPE html>
	<html>
		<head>
			<title>Date and Time</title>
			<meta http-equiv="refresh" content="1">
			<style type="text/css">
				p{
					border:3px dashed lime;margin:0.3px 0.3px 0.3px 0.3px;padding:5px;background-color:hotpink;
				}
			</style>
		</head>
		<body>
			<?php
				date_default_timezone_set("ASia/Kolkata");
				echo "<center>Chaithanya C</center>";
				echo "<center>1CR17CS030</center>";
				echo "<center></center>";
				echo "<center><p>".date("d/m/Y")."</p></center>";
				echo "<center><p>".date("d-m-Y")."</p></center>";
				echo "<center><p>".date("d.m.Y")."</p></center>";
				echo "<center><p>".date("d.M.Y/D")."</p></center>";
				echo "<center><p>".date("h:i:s")."</p></center>";
				echo "<center><p>".date("M,d,Y h:i:s A")."</p></center>";
				echo "<center><p>".date("h:i a")."</p></center>";
			?>
		</body>
	</html>