<?php

	$connect = mysqli_connect ( "localhost" , "root" , "", "ramzydb" );

	if(!$connect){
		echo "not connected";
	}
	else{
		echo '';
	}

?>