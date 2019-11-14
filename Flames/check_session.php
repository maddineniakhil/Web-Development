<?php
session_start()
$dec= $_SESSION['dec'];
if($dec == "session_on"){
	header("location: flames.php");
}else{
	header("location: flames.html");
}


?>