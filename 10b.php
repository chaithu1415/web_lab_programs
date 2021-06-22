<!DOCTYPE html>
	<html>
		<head>
			<title>Sorting</title>
			<style>
				table {
					border-collapse: collapse;width:30%;color:black;font-family: sans-serif;font-size:18px;text-align:center;
				}
				th {
					background-color:palevioletred;color:black;
				}
				tr:nth-child(even) {
					background-color:pink;
				}
				tr:nth-child(odd){
					background-color:lightsalmon;
				}
			</style>
			<title>Selection Sort</title>
		</head>
		<body>
			<center>
				<h1>Chaithanya C</h1>
				<h1>1CR17CS030</h1>
				<table border="2">
					<caption><b><br>SELECTION SORT</caption>
						<tr>
							<th colspan="3">BEFORE SORTING</th>
						</tr>
						<tr>
							<th>USN</th><th>NAME</th><th>BATCH</th>
						</tr>
						<?php
							$servername="localhost";
							$username="root";
							$password="";
							$dbname="web-10";
							$conn=mysqli_connect($servername,$username,$password,$dbname);
							if($conn->connect_error)
								die("connection error:".$conn->connect_error);
							else
								echo "Connection established Successfully!!!";

							$sql="Select * from students";
							$result=$conn->query($sql);
							$a=[];
							if($result->num_rows>0){
								while($row=$result->fetch_assoc()){
									echo "<tr><td>".$row["usn"]."</td>";
									echo "<td>".$row["name"]."</td>";
									echo "<td>".$row["batch"]."</td></tr>";
									array_push($a,$row["usn"]);

								}
							}
							else
								echo "table is empty";

							$n=count($a);
							for($i=0;$i<($n-1);$i++){
								$pos=$i;
								for($j=$i+1;$j<$n;$j++){
									if($a[$pos]>$a[$j])
										$pos=$j;
								}
								if($pos!=$i){
									$temp=$a[$i];
									$a[$i]=$a[$pos];
									$a[$pos]=$temp;
								}
							}
							$b=[];
							$c=[];
							$result=$conn->query($sql);
							if($result->num_rows>0){
								while($row=$result->fetch_assoc()){
									for($i=0;$i<$n;$i++){
										if($row["usn"]==$a[$i]){
											$b[$i]=$row["name"];
											$c[$i]=$row["batch"];
										}
									}
								}
							}
							echo "<tr><th colspan='3'>AFTER SORTING</th></tr>";
							echo "<tr><th>USN</th><th>NAME</th><th>BATCH</th></tr>";
							for($i=0;$i<$n;$i++){
								echo "<tr><td>".$a[$i]."</td>";
								echo "<td>".$b[$i]."</td>";
								echo "<td>".$c[$i]."</td></tr>";
							}
							echo "</table>";
							$conn->close();
						?>
		</center>
	</body>
</html>