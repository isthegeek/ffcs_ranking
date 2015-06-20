<?php
include_once('mysql.php');
$key = $_GET['key'];
$arr = array();
$query = $conn->query("SELECT * FROM list WHERE course_code LIKE '%{$key}%' OR course_title LIKE '%{$key}%' OR faculty_name LIKE '%{$key}%' OR faculty_school LIKE '%{$key}%'");
while($row=mysqli_fetch_assoc($query))
{
  echo $row['course_code'].' '.$row['course_title'].'<br/>';
}
?>
