<?php 
	session_start();
	if(isset($_SESSION['user'])){
		$name=$_SESSION['user'];
	}else{
		echo "<script>window.location.href='http://127.0.0.1';</script>";
	}
	$mysqli = new mysqli('127.0.0.1', 'root', '', 'my_db');
	if(mysqli_connect_errno()){
		echo mysqli_connect_error();
	}

	$mysqli = mysqli_init();
	$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时
	$mysqli->real_connect('127.0.0.1', 'root', '', 'my_db');
	$mysqli->query("set names 'utf8'");
	$query="SELECT * FROM `lock` WHERE `userid` = '$name'";
	$results=$mysqli->query($query);
	while ($row = $results->fetch_array()) {
		echo "string\n";
		echo $row[5]."sdfaf\n";
	}
	
	
?>