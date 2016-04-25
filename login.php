<?php
session_start();
$username = $_GET['username'];
$password = $_GET['password'];

$con=mysql_connect("127.0.0.1" ,"root","root") or die (mysql_error());
mysql_select_db("wifi" ,$con);
 $str = "select * from  user where username='$username' AND password ='$password'";
 // echo $str;
 $re = mysql_query($str);
    $s= mysql_fetch_array($re);
		echo $s[3];
		echo '</br>';
		echo $s[4];
		echo '</br>';
		if($username==$s[3]&&$password==$s[4]){
			echo "have";
			$_SESSION['username'] = $username;
			// echo $_SESSION['username']." session";
		}
		else{
			echo "dont have";
			session_destroy();
			echo "<script >";
			echo "window.location='index.html'";
			echo "</script>";
		}
 ?>
