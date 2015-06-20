<html>

<head>
<?php
include_once('mysql.php');

$teacher_name = "ARNOLD EMERSON I";
$subject_code = "BIF304";
$subject_name = "Computational Biology";


?>
</head>
<body>
<form name = "doRating" action = "rating_done.php" method = "GET">
	<label>Registration Number (It would be completely kept anomynous) : </label><input type = "text" name = "regno"><br>
<label>Rate <?php echo $teacher_name.' for '. $subject_name ?> </label>
<select name="rate_value">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
<br><br>
<input type = "hidden" value = "<?php echo $teacher_name; ?>" name = "teacher_name">
<input type = "hidden" value = "<?php echo  $subject_name; ?>" name = "subject_name">
<input type = "hidden" value = "<?php echo  $subject_code; ?>" name = "subject_code">

<input type = "submit" value= "Rate">

</select>
</form>
</body>
