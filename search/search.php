<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysql_connect("localhost","root","");
    $db=mysql_select_db("search",$con);
    $query=mysql_query("select * from user_name where first_name LIKE '%{$key}%'");
    while($row=mysql_fetch_assoc($query))
    {
      $array[] = $row['first_name'];
    }
    echo json_encode($array);
?>
