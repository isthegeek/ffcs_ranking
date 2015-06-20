<?php
$conn = new mysqli('localhost', 'root', '', 'ffcs');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
