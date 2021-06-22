
<!--
	6th program
<?php
/*
$file="6a.txt";
$count=strval(file_get_contents($file));
$count=(int)$count;
file_put_contents($file,$count+1);
echo($count);
*/
?>

2nd program

<!DOCTYPE html>
	<html>
		<head>
			<title>square and cube</title>
			<style type="text/css">
				table,th,tr
				{
					background-color:lime;
					color:hotpink;
					font-size:15px;
				}
			</style>
		</head>
		<body>
			<table border=10px bgcolor="aqua">
				<tr>
					<th>number</th>
					<th>square</th>
					<th>cube</th>
				</tr>
				<script type="text/javascript">
					var i;
					for(i=0;i<=10;i++)
					{
						document.write("<tr><td>"+i+"</td><td>"+(i*i)+"</td><td>"+(i*i*i)+"</td</tr>");
					}
				</script>
			</table>
		</body>
		</html>
7th program

<!DOCTYPE html>
<html>
	<head>
		<title>clock</title>
		<meta http-equiv="refresh" content="1">
		<style type=text/css>
			p{
				border:dashed 10px tomato;
				margin:0px 700px 700px 700px;
				background-color:aqua;
				padding:7px;
			}
		</style>
	</head>
	<body>
		<center>
		<?php
		/*
		date_default_timezone_set("ASia/Kolkata");
		echo "<br>didgital clock</br>";
		echo "<center><p>".date("h:i:s a")."</p></center>";*/
		?>
	</body>
</html>

9th program

<!DOCTYPE html>
<html>
<head>
	<title>pattern</title>
	<style type="text/css">
		body{
			background-color:aqua;
			font-style:cursive;
			font-size:20px;
		}
	</style>
</head>
<body>
	<center>
		<?php/*
		$a="Mississippi Alabama Texas Massachusetts Kansas";
		$b=[];
		$c=explode(" ",$a);
		echo("original array<br>");
		foreach($c as $key=>$value)
		{
			echo("c[$key]=$value<br>");
		}
		foreach($c as $value){
			if(preg_match('/.*xas$/',$value))
				$b[0]=$value;
		}
		foreach($c as $value){
			if(preg_match('/^k.*s$/i',$value))
				$b[1]=$value;
		}
		foreach($c as $value){
			if(preg_match('/^M.*s$/',$value))
				$b[2]=$value;
		}
		foreach($c as $value){
			if(preg_match('/.*a$/',$value))
				$b[3]=$value;
		}
		echo("<b>the converted array is:<br>");
		foreach($b as $key=>$value)
		{
			echo("b[$key]=$value<br>");
		}*/
		?>
	</center>
</body>
</html>
4th program

<!DOCTYPE html>
<html>
<head>
	<title>string</title>
	<style type="text/css">
		body{
			background-color: aqua;
			font-style: cursive;
		}
	</style>
</head>
<body>
	<center>
		<script type="text/javascript">
			var str=prompt("enter the string:");
			document.write("the string is:"+str+"<br>");
			str=str.toUpperCase()
			document.write("<br>the converted string is:"+str)
			n=str.length
			document.write("<br>the length of the string is:"+n)
			var i;
			for(i=0;i<n;i++)
			{
				ch=str.charAt(i);
				if(ch=="A" || ch=="E" || ch=="I" || ch=="O" || ch=="U")
					break;
		}
		if(i<n)
			document.write("<br>the left most vowel found at:"+(i+1))
		else
			document.write("<br>the vowel not found")
	</script>
</center>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>reverse</title>
	<style type="text/css">
		body{
			background-color:blue;
			font-size:30px;
			font-style:italic;
		}
	</style>
</head>
<body>
	<center>
		<script type="text/javascript">
			var num=prompt("enter the number:")
			n=num
			rev=0
			while(num!=0)
			{
				d=num%10
				rev=rev*10+d
				num=Math.floor(num/10)
			}
			document.write("<br><br>the reverse of a number "+n+" is:"+rev)
		</script>
	</center>
</body>
</html>+

<!DOCTYPE html>
<html>
<head>
	<title>variation</title>
	</head>
	<body>
		<p id="tex" style="font-size:5pt;"></p>
			<script type="text/javascript">
				var x=document.getElementById("tex")
				var f=5
				var a=setInterval(increment,100)
				function increment()
				{
					x.innerHTML="text growing"
					x.setAttribute("style","font-size:"+f+"pt;color:aqua;letter-spacing:15px;background-color:lime")
					f+=5
					if(f==50)
					{
						clearInterval(a);
						var b=setInterval(decrement,100)
					}

				}
				function decrement()
				{
					f-=5
					x.innerHTML="text shrinking"
					x.setAttribute("style","font-size:"+f+"pt;color:lightpink;letter-spacing:15px;background-color:yellow")
					if(f==5)
					{
						clearInterval(b)
					}

				}
			</script>
	</body>
	</html>

-->