<?php
	$file = $_GET['name'].".pdf";
	header("content-disposition:attachment; filename=".urlencode($file));
	$fb = fopen($file, "r");
	while(!feof($fb)){
		echo fread($fb, 8192);
		flush();
	}
	fclose($fb);
?>