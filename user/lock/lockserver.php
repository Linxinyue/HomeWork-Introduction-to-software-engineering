<?php
	//echo "正在保存...";
	session_start();
	if(isset($_SESSION['user'])){
		$name=$_SESSION['user'];
	}
	$address=$_POST["address"];
	$accountname=$_POST["accountname"];
	$accountpassword=$_POST["accountpassword"];
	$accountsecname=$_POST["accountsecname"];
	$accountsecpasswd=$_POST["accountsecpasswd"];

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
	$query="UPDATE `lock` SET `accountname`='$accountname',`accountpwd`='$accountpassword',
	`accountque`='$accountsecname',`accountans`='$accountsecpasswd' WHERE userid='$name' and address = '$address'";
	//$sql = "UPDATE `informations` SET `realname`='新月' WHERE name='xinyue'";
	$results=$mysqli->query($query);
	if($results){
    	//print 'Success! record updated / deleted'; 
	}else{
	    print 'Error : ('. $mysqli->errno .') '. $mysqli->error;
	}
	//$row = $results->fetch_array();

?>