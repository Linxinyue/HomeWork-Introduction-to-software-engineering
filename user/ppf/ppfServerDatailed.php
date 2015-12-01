<?php
	echo "正在保存...";
	$name=$_POST["name"];
	$figure=$_POST["figure"];
	$marriage=$_POST["marriage"];
	$habits=$_POST["habits"];
	$character=$_POST["character"];
	$education=$_POST["education"];
	$currentjob=$_POST["currentjob"];
	$contactphone=$_POST["contactphone"];
	if (strlen($name) > 0){
		//echo $name;
	}

	$mysqli = new mysqli('127.0.0.1', 'root', '', 'my_db');
	if(mysqli_connect_errno()){
		echo mysqli_connect_error();
	}

	$mysqli = mysqli_init();
	$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时
	$mysqli->real_connect('127.0.0.1', 'root', '', 'my_db');
	$mysqli->query("set names 'utf8'");
	//$query="SELECT * FROM `informations` WHERE `name` = '$name'";
	$query="UPDATE `informations` SET `figure`='$figure',`marriage`='$marriage',
		`habits`='$habits',`characters`='$character',`education`='$education',`job`='$currentjob',
		`contact`='$contactphone' WHERE name='$name'";
	//$sql = "UPDATE `informations` SET `figure`='新月' WHERE name='xinyue'";
	$results=$mysqli->query($query);
	if($results){
    	//print 'Success! record updated / deleted'; 
	}else{
	    print 'Error : ('. $mysqli->errno .') '. $mysqli->error;
	}
	//$row = $results->fetch_array();

?>