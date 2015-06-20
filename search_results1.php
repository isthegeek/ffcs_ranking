<html>
<body>
<h1>So... some stats about the subject...</h1>
<h3>Top trending teachers</h3><!-- based on the number of votes.. -->
<table border="1" style="width:100%">

  <tr>
    <td><b>COURSE CODE</td>
    <td><b>COURSE NAME</b></td>
    <td><b>FACULTY NAME</b></td>
    <td><b>Votes</b></td>
    <td><b>Points</b></td>
  </tr>

<?php
include_once('mysql.php');

$code = $_GET['id'];
$sql = "SELECT * FROM list WHERE course_code LIKE '%$code%' ORDER BY number_of_votes DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


    	if(strpos($row["faculty_name"],'NEW')== false ){
      echo "<tr><td> ". $row["course_code"]."</td>";
      echo "<td>".$row["course_title"]."</td>";
       echo "<td>".$row["faculty_name"]."</td>";
       echo "<td>".$row["number_of_votes"]."</td>";
       echo "<td>".$row["average_points"]."</td><tr>";
       

    }
    }
} else {
    echo "0 results";
}

?>

</table>
<br>
<h3>Highest Rating teachers</h3>
<table border="1" style="width:100%">

  <tr>
    <td><b>COURSE CODE</td>
    <td><b>COURSE NAME</b></td>
    <td><b>FACULTY NAME</b></td>
    <td><b>Votes</b></td>
    <td><b>Points</b></td>
  </tr>

<?php
include_once('mysql.php');

$sql = "SELECT * FROM list WHERE course_code LIKE '%$code%' ORDER BY average_points DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


    	if(strpos($row["faculty_name"],'NEW')== false ){
      echo "<tr><td> ". $row["course_code"]."</td>";
      echo "<td>".$row["course_title"]."</td>";
       echo "<td>".$row["faculty_name"]."</td>";
       echo "<td>".$row["number_of_votes"]."</td>";
       echo "<td>".$row["average_points"]."</td><tr>";
       

    }
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</table>

</body>
</html>