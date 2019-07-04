<?php

session_start();

if (isset($_SESSION['username'])){
echo $sesssion= $_SESSION['username'];

 
	$session =session_destroy();

	if ($session) {
	echo "session destroyed";
	header('location:login.php');}
}else {



	echo "good";
}
?>