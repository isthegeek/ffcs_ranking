<?php
$servername ="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password);
 $name=$_POST["typeahead"];
 if($name=="")
 {
 	echo "Please enter the name of the member";
 }
 else
 {
if($conn->connect_error)
{
	die("connection failed: ".$conn->connect_error);

}


mysqli_select_db($conn,"search");

$sql="SELECT * FROM user_name WHERE first_name='$name'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$temp=$row["first_name"];
		echo "<h1> DETAILS </h1>";
		echo "<p> Name: $temp </p>";
		$temp=$row["user_id"];
		echo "<p> ID: $temp </p>"; 
		$id=$temp;
		$image="images"."/"."$id".".jpg"; ?>
		<img src="<?php echo $image;?>" alt="Profile " style="width:300px;height:300px">
		<?php 
	}

}}
?>