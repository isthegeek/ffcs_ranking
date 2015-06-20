<?php
include_once('mysql.php');

$id = $_GET['id'];
$query = $conn->query("SELECT * FROM list WHERE id='$id'");
while($row=mysqli_fetch_assoc($query))
{
  echo "Name: ".$row['faculty_name']."<br/>Course Code: ".$row['course_code']."<br/>Course Title: ".$row['course_title']."<br/>Faculty School: ".$row['faculty_school']."<br/>Number Of Votes: ".$row['number_of_votes']."<br/>Average Points: ".$row['average_points'];
}
?>
