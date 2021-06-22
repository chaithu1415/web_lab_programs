<!DOCTYPE html>
    <html>
        <head>
            <title>Search</title>
            <style>
                table {
                    border-collapse: collapse;width:30%;color:black;font-family: sans-serif;font-size:18px;text-align:center;
                }
                th {
                    background-color:hotpink;color:black;
                }
                tr:nth-child(even) {
                    background-color:lightblue;
                }
                tr:nth-child(odd){
                    background-color:cyan;
                }
            </style>
            <title>Selection Sort</title>
        </head>
        <body>
            <center>
                <h1>Chaithanya C</h1>
                <h1>1CR17CS030</h1>
                <table border="2">
                    <caption><b><br>SEARCHING FOR A STUDENT RECORD</caption>
                    <tr>
                        <th colspan="3">DETAILS</th>
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
                        echo "<br>Connection established Successfully!!!";
                    $usn=$_POST['usn'];
                    $sql="SELECT * from students WHERE usn=$usn";
                    $result=$conn->query($sql);
                    echo "<br><b>Displaying Student Data";
                    if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){
                            echo "<tr><td>".$row["usn"],"</td>";
                            echo "<td>".$row["name"]."</td>";
                            echo "<td>".$row["batch"]."</td></tr>";
                        }
                    }
                    echo "</table>";
                    $conn->close();
                ?>
        </body>
    </html>