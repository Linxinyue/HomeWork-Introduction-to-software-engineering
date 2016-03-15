<?php
	//echo "正在保存...";
	session_start();
	if(isset($_SESSION['user'])){
		$name=$_SESSION['user'];
	}
	$option=$_POST["option"];
	if ($option=="change") {
		//ajaxContact("change",oldname,inputname,companycontent,inputphone,inputnote);
		$oldname=$_POST["oldname"];
		$inputname=$_POST["inputname"];
		$companycontent=$_POST["companycontent"];
		$inputphone=$_POST["inputphone"];
		$inputnote=$_POST["inputnote"];
		$idname=$name.$inputname;

		$mysqli = new mysqli('127.0.0.1', 'root', '', 'my_db');
		if(mysqli_connect_errno()){
			echo mysqli_connect_error();
		}

		$mysqli = mysqli_init();
		$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时
		$mysqli->real_connect('127.0.0.1', 'root', '', 'my_db');
		$mysqli->query("set names 'utf8'");
		//$query="SELECT * FROM `informations` WHERE `name` = '$name'";
		$query="UPDATE `contact` SET `contactname`='$inputname',`contactcompany`='$companycontent',`contactphone`='$inputphone',`contactnote`='$inputnote',`idname`='$idname' WHERE userid='$name' and contactname = '$oldname'";

		//$sql = "UPDATE `informations` SET `realname`='新月' WHERE name='xinyue'";
		$results=$mysqli->query($query);
		if($results){
	    	//print 'Success! record updated / deleted'; 
		}else{
		    print 'Error : ('. $mysqli->errno .') '. $mysqli->error;
		}
		//$row = $results->fetch_array();
	} elseif ($option=="new") {
		$inputname=$_POST["inputname"];
		$companycontent=$_POST["companycontent"];
		$inputphone=$_POST["inputphone"];
		$inputnote=$_POST["inputnote"];
		$idname=$name.$inputname;

		$mysqli = new mysqli('127.0.0.1', 'root', '', 'my_db');
		if(mysqli_connect_errno()){
			echo mysqli_connect_error();
		}
		$mysqli = mysqli_init();
		$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时
		$mysqli->real_connect('127.0.0.1', 'root', '', 'my_db');
		$mysqli->query("set names 'utf8'");

		$query = "INSERT INTO `contact` (`idname`, `userid`, `contactname`, `contactphone`, `contactcompany`, `contactnote`) VALUES ('$idname', '$name', '$inputname', '$inputphone', '$companycontent', '$inputnote');";
		$results=$mysqli->query($query);
		if($results){
	    	//print 'Success! record updated / deleted'; 
		}else{
		    print 'Error : ('. $mysqli->errno .') '. $mysqli->error;
		}
	}else {
		$oldname=$_POST["oldname"];

		$mysqli = new mysqli('127.0.0.1', 'root', '', 'my_db');
		if(mysqli_connect_errno()){
			echo mysqli_connect_error();
		}

		$mysqli = mysqli_init();
		$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时
		$mysqli->real_connect('127.0.0.1', 'root', '', 'my_db');
		$mysqli->query("set names 'utf8'");
//DELETE FROM `my_db`.`lock` WHERE `lock`.`address` = \'momo\'

		$queryd = "DELETE FROM `contact` WHERE `contactname` = '$oldname' and `userid` ='$name'";
		$results=$mysqli->query($queryd);
		if($results){
	    	//print 'Success! record updated / deleted'; 
		}else{
		    print 'Error : ('. $mysqli->errno .') '. $mysqli->error;
		}

	}
?>