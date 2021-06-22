<!DOCTYPE html>
	<html>
		<head>
			<title>Matrix Calculations</title>
			<style type="text/css">
				body{
					background-color:gold;font-family: sans-serif;font-size: 20px;
				}
			</style>
		</head>
		<body>
			<center>
				<h1>Chaithanya C</h1>
				<h1>1CR17CS030</h1>
			<?php
				$a=array(array(1,2,3),array(4,5,6),array(7,8,9));
				$b=array(array(1,2,3),array(4,5,6),array(7,8,9));
				$m=count($a);
				$n=count($a[0]);
				$p=count($b);
				$q=count($b[1]);
				echo "Matrix A:<br/>";
				for($r=0;$r<$m;$r++){
					for($c=0;$c<$n;$c++){
						echo " ".$a[$r][$c];
					}
					echo "<br/>";
				}
				echo "Matrix B:<br/>";
				for($r=0;$r<$p;$r++){
					for($c=0;$c<$q;$c++){
						echo " ".$b[$r][$c];
					}
					echo "<br/>";
				}
				echo "Transpose Of Matrix A:<br/>";
				for($r=0;$r<$m;$r++){
					for($c=0;$c<$n;$c++){
						echo " ".$a[$c][$r];
					}
					echo "<br/>";
				}
				if($n==$p){
					echo "Matrix Multiplication:<br/>";
					$result=array();
					for($r=0;$r<$m;$r++){
						for($c=0;$c<$n;$c++){
							$result[$r][$c]=0;
							for($k=0;$k<$n;$k++){
								$result[$r][$c]+=$a[$r][$k]*$b[$k][$c];
							}
						}
					}
				}
				for($r=0;$r<$m;$r++){
					for($c=0;$c<$n;$c++){
						echo " ".$result[$r][$c];
					}
					echo "<br/>";
				}
				echo "Matrix Addition:<br/>";
				if($m==$p && $n==$q){
					for($r=0;$r<$m;$r++){
						for($c=0;$c<$q;$c++){
							echo $a[$r][$c]+$b[$r][$c]." ";
						}
						echo "<br/>";
					}
				}
			?>
		</body>
	</html>