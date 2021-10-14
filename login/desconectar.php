<?php 
session_start();
if($_SESSION['user']){	
	session_destroy();
	header("location: login.php");
}
else{
	header("location: login.php");
}
?>