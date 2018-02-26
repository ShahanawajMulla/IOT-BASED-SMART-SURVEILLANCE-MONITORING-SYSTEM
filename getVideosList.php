<?php

	$dir = '/var/www/html/smart/videos';

	$files1 = scandir($dir);

	$response = array();
	$response["data"] = array();

	foreach($files1 as $file){
		$data = array();
		$data["filename"] = $file;
		
		array_push($response["data"], $data);
	}
	
	$response["success"] = 1;
	echo json_encode($response);
?>
