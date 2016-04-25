<?php
session_start();
$username =  $_GET['username'];
$password = $_GET['password'];
$name = $_GET['name'];
$surname = $_GET['surname'];
$sid = $_GET['sid'];
$con=mysql_connect("127.0.0.1" ,"root","root") or die (mysql_error());
mysql_select_db("wifi" ,$con);
$query = "INSERT INTO user Values ( '$sid','$name','$surname','$username','$password')";
$result = mysql_query($query);
echo "<script >";
echo "window.location='index.html'";			
echo "</script>";
 ?>
