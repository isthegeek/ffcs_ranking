<html>
<body>
<h1>Welcome to ffcs ranking</h1>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ffcs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?><table border="1" style="width:100%">
 
  <tr>
    <td>Eve</td>
    <td>Jackson</td>		
    <td>94</td>
  </tr>
<?php
$sql = "SELECT * FROM list";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      

    	if(strpos($row["faculty_name"],'NEW')== false ){
      echo "<tr><td> ". $row["course_code"]."</td>";
      echo "<td>".$row["course_title"]."</td>";
       echo "<td>".$row["faculty_name"]."</td><tr>";
    }
    }
} else {
    echo "0 results";
}
$conn->close();

?>
</body>
</html>