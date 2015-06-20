<html>

<head>
<?php
include_once('mysql.php');

$code = $_GET['code'];
$fac = $_GET['fac'];
$subject_name = $_GET['name'];
if(isset($_GET['msg'])){
	if($_GET['msg']==1){
		echo "Successful";
	}
	else if($_GET['msg']==2) {
		echo "Already did";
	}
}

?>
</head>
<body>
<form name = "doRating" action = "rating_done.php" method = "GET">
	<label>Registration Number (It would be completely kept anomynous) : </label><input type = "text" name = "regno" required><br>
<label>Rate <?php echo $fac.' for '. $subject_name ?> </label>
<select name="rate_value">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
<br><br>
<input type = "hidden" value = "<?php echo $fac; ?>" name = "teacher_name">
<input type = "hidden" value = "<?php echo  $subject_name; ?>" name = "subject_name">
<input type = "hidden" value = "<?php echo  $code; ?>" name = "subject_code">

<input type = "submit" value= "Rate">

</select>
</form>
</body>
