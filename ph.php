<!DOCTYPE HTML>  
<html>
<head>
  <title>USN</title>
    <style type="text/css">
    body{
      background-color:cyan;font-family: sans-serif;font-size:20px;
    }
    .error{
      color:darkblue;
    }
  </style>
</head>
<body>
  <center>
<?php
$USNError = "";
$USN=  "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["USN"])) {
    $USNError = "USN Is Required";
  } else {
    $USN= test_input($_POST["USN"]);
    if (!preg_match("/^[1-4][A-Z][A-Z][1-9][1-9][A-Z][A-Z][0-9][0-9][0-9]$/",$USN)) {
      $USNError = "Enter Valid USN";
    }
  }  
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<h1>Chaithanya C</h1>
<h1>1CR17CS030</h1>
<br></br>
<h2>USN Validation</h2>
<p><span class="error">*Required Field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  USN: <input type="text" name="USN" value="<?php echo $USN;?>">
  <span class="error">*<?php echo $USNError;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
<?php
echo "<h2>You Can See The Input Entered By You Here:</h2>";
echo $USN;
?>
</center>
</body>
</html>