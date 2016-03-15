<?php

	$q=$_GET["q"];

	if (strlen($q) > 0){
		$hint="hhelow";
		
	}
	$myfile = fopen("main2.php", "r") or die("Unable to open file!");
	echo fread($myfile,filesize("main2.php"));
	fclose($myfile);

?>
