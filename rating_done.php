<?php
include_once('mysql.php');
$mysqli =  mysqli_connect('localhost','root','','ffcs');

$regno = $_GET['regno'];
$rating= $_GET['rate_value'];
$subject_code= $_GET['subject_code'];
$faculty_name = $_GET['teacher_name'];
$course_title = $_GET['subject_name'];

mysqli_query($conn,"INSERT INTO rating (subject_code, course_title,faculty_name, points,regno) VALUES ('$subject_code', '$course_title', '$faculty_name','$rating', '$regno')");

mysqli_close($conn);
$this_thing = $mysqli->query("SELECT * FROM list WHERE  course_code = '$subject_code' AND faculty_name= '$faculty_name'" );
if($this_thing){
    $row= $this_thing->fetch_assoc();
	$number_of_votes=$row['number_of_votes'];
	$average_points=$row['average_points'];
    echo $number_of_votes;
    echo $average_points;
    $number_of_votes=$number_of_votes+1;
    $average_points=(($average_points+$rating)/2);
$results = $mysqli->query("UPDATE list SET number_of_votes='$number_of_votes', average_points ='$average_points' WHERE course_code = '$subject_code' AND faculty_name= '$faculty_name'");
echo $results;
}
?>