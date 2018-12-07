<?php

if (isset($_POST['temperature'])) {
	$temperature = $_POST['temperature'];
	$temperature_file = ('data.json');

	$op = file_put_contents($temperature_file, $temperature) ;
	if (! $op){
		echo "ERROR !";
	}

}	else{
	echo "data error ";
} 	

?>