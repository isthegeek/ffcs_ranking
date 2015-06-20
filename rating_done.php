<?php
include_once('mysql.php');

$regno = $_GET['regno'];
$rating= $_GET['rate_value'];
$subject_code= $_GET['subject_code'];
$faculty_name = $_GET['teacher_name'];
$course_title = $_GET['subject_name'];
$check = $conn->query("SELECT * FROM rating WHERE regno = '$regno' AND faculty_name = '$faculty_name' AND subject_code = '$subject_code'");

if(mysqli_num_rows($check)==0)
{
mysqli_query($conn,"INSERT INTO rating (subject_code, course_title,faculty_name, points,regno) VALUES ('$subject_code', '$course_title', '$faculty_name','$rating', '$regno')");

mysqli_close($conn);
$this_thing = $conn->query("SELECT * FROM list WHERE  course_code = '$subject_code' AND faculty_name= '$faculty_name'" );
if($this_thing){
    $row= $this_thing->fetch_assoc();
	$number_of_votes=$row['number_of_votes'];
	$average_points=$row['average_points'];
    $number_of_votes=$number_of_votes+1;
    $average_points=(($average_points+$rating)/2);
$results = $conn->query("UPDATE list SET number_of_votes='$number_of_votes', average_points ='$average_points' WHERE course_code = '$subject_code' AND faculty_name= '$faculty_name'");
}
header('Location: rate_search.php');
}
else {
  header('Location: rating.php?msg=2');
}
?>
