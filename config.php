<?php

$conn = mysqli_connect('localhost','root','','shop_db') or die('connection failed');
if($conn)
echo "Connected to database!!!";
else
echo "Failed to Connect:".mysql_error();
?>