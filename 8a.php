<!DOCTYPE html>
	<html>
		<head>
			<title>Calculator</title>
			<style type="text/css">
				input,tr,th{
					background-color:aqua;
				}
				#x{
					width:100%;
				}
			</style>
		</head>
		<body>
			<center>
				<h1>Chaithanya C</h1>
				<h1>1CR17CS030</h1>
			<form method="POST">
			<table border="5">
				<caption>Calculator</caption>
					<tr>
						<th>Value:1</th>
						<td><input type="text" name="a"></td>
					</tr>
					<tr>
						<th>Value:2</th>
					<td><input type="text" name="b"></td>
					</tr>
					<tr>
						<th colspan="2"><input type="submit" id="x" name="cal" value="Calculate"></th>
					</tr>
			</form>
			<?php
				if(isset($_POST['cal'])){
					$a=$_POST['a'];
					$b=$_POST['b'];
					if(is_numeric($a) && is_numeric($b)){
						echo "<tr><th>ADDITION</th><td>".($a+$b)."</td></tr>";
						echo "<tr><th>SUBSTRACTION</th><td>".($a-$b)."</td></tr>";
						echo "<tr><th>MULTIPLICATION</th><td>".($a*$b)."</td></tr>";
						echo "<tr><th>DIVISION</th><td>".($a/$b)."</td></tr>";
					}
					else
						echo "invalid input";
				}
				echo "</table>";
			?>
			</center>
		</body>
	</html>