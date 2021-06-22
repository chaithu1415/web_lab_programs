<!--<!DOCTYPE html>
	<html>
	<head>
		<title>vtu</title>
	</head>
	<body>
		<p id="tex" style="font-size:5pt;"></p>
				<script type="text/javascript">
					var x=document.getElementById("tex")
					var f=5
					var a=setInterval(increment,100)
					function increment(){
						x.innerHTML="VTU-BELGAVI"
						x.setAttribute("style","font-size:"+f+"pt;color:blue;letter-spacing:30px;background-color:lime")
						f+=5
						if(f==50){
							clearInterval(a);
						}
					}
				</script>
	
	</body>
	</html>

<?php
/*
date_default_timezone_set('ASia/Kolkata');
$Hour = date('G');
if ( $Hour >= 5 && $Hour <= 11 ) {
    echo "Good Morning";
} else if ( $Hour >= 12 && $Hour <= 18 ) {
    echo "Good Afternoon";
} else if ( $Hour >= 19 || $Hour <= 4 ) {
    echo "Good Evening";
}
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>session</title>
	<meta http-equiv="refresh" content="1">
</head>
<body>
<?php  /*
session_start();  
   
if(isset($_SESSION['count']))  
{  
echo "Your session count: ".$_SESSION['count']."<br />";  
$_SESSION['count']++;  
}  
else  
{  
$_SESSION['count'] = 1;  
echo "Session does not exist";  
}      
   */
?>
</body>
</html>

<!DOCTYPE html>
<html>
<body>
<?php    /*
  class student
  {
    // Properties
    public $name;
    public $usn;
    public $marks;

    // Methods
    function set_name($name) 
    {
      $this->name = $name;
    }
    function get_name() 
    {
      return $this->name;
    }
    function set_usn($usn) 
    {
      $this->usn = $usn;
    }
    function get_usn() 
    {
      return $this->usn;
    }
    function set_marks($marks) 
    {
      $this->marks = $marks;
    }
    function get_marks() 
    {
      return $this->marks;
    }
  }

  $s1 = new student();
  $s2 = new student();
  $s1->set_name('chaithu');
  $s2->set_name('chai');
  $s1->set_usn('030');
  $s2->set_usn('031');
  $s1->set_marks('99');
  $s2->set_marks('100');
  echo ("student 1 details <br>name:".$s1->get_name()."<br>usn:".$s1->get_usn()."<br>marks:".$s1->get_marks());
  echo "<br><br>Student 2 details<br>";
  echo("name:".$s1->get_name()."<br>usn:".$s1->get_usn()."<br>marks:".$s1->get_marks());    */
?>

</body>
</html>

-->
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <script type="text/javascript">
var b=new Date();
document.write("today is:"+b.toString());
</script>
</body>
</html>

