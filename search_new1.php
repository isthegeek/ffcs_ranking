<?php
include_once('mysql.php');
$key = $_GET['key'];
$arr = array();
$query = $conn->query("SELECT * FROM list WHERE course_title LIKE '%{$key}%' or course_code LIKE '%{$key}%' group by course_code");
while($row=mysqli_fetch_assoc($query))
{
  echo '<a href="search_results1.php?id='.$row['course_code'].'">'.$row['course_code'].' '.$row['course_title'].'<br/>';
}
?>

