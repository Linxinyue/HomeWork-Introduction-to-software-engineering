<?php
	echo "正在保存...";
	$name=$_POST["name"];
	$realname=$_POST["realname"];
	$birthday=$_POST["birthday"];
	$sex=$_POST["sex"];
	$bloodtype=$_POST["bloodtype"];
	$birthplace=$_POST["birthplace"];
	$liveplace=$_POST["liveplace"];
	$simpleinformation=$_POST["simpleinformation"];
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
	$query="UPDATE `informations` SET `realname`='$realname',`birthday`='$birthday',
		`sex`='$sex',`bloody`='$bloodtype',`birthplace`='$birthplace',`liveplace`='$liveplace',
		`simpleinformation`='$simpleinformation' WHERE name='$name'";
	//$sql = "UPDATE `informations` SET `realname`='新月' WHERE name='xinyue'";
	$results=$mysqli->query($query);
	if($results){
    	//print 'Success! record updated / deleted'; 
	}else{
	    print 'Error : ('. $mysqli->errno .') '. $mysqli->error;
	}
	//$row = $results->fetch_array();

?>