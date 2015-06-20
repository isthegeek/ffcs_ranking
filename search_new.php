<?php
include_once('mysql.php');
$key = $_GET['key'];
$arr = array();
$query = $conn->query("SELECT * FROM list WHERE faculty_name LIKE '%{$key}%'");
while($row=mysqli_fetch_assoc($query))
{
  echo '<a href="search_results.php?id='.$row['id'].'">'.$row['faculty_name'].': '.$row['course_code'].' '.$row['course_title'].'<br/>';
}
?>
