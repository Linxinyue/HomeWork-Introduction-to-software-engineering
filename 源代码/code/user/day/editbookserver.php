<?php
	//echo "正在保存...";
	session_start();
	if(isset($_SESSION['user'])){
		$name=$_SESSION['user'];
	}
	$option=$_POST["option"];
	if ($option=="change") {
		$booktitle=$_POST["booktitle"];
		$newbooktitle=$_POST["newbooktitle"];
		$bookdescription=$_POST["bookdescription"];

		$mysqli = new mysqli('127.0.0.1', 'root', '', 'my_db');
		if(mysqli_connect_errno()){
			echo mysqli_connect_error();
		}

		$mysqli = mysqli_init();
		$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时
		$mysqli->real_connect('127.0.0.1', 'root', '', 'my_db');
		$mysqli->query("set names 'utf8'");
		$query1="UPDATE `diarybook` SET `booktitle`='$newbooktitle',`bookdescription`='$bookdescription' WHERE userid='$name' and booktitle = '$booktitle' ";
		$query2="UPDATE `diary` SET `booktitle`='$newbooktitle' WHERE userid='$name' and booktitle = '$booktitle' ";
		$results1=$mysqli->query($query1);
		$results2=$mysqli->query($query2);
		if($results1||$results2){
	    	//print 'Success! record updated / deleted'; 
		}else{
		    print 'Error : ('. $mysqli->errno .') '. $mysqli->error;
		}
		//$row = $results->fetch_array();
	} elseif ($option=="new") {
		$newbooktitle=$_POST["newbooktitle"];
		$bookdescription=$_POST["bookdescription"];

		$mysqli = new mysqli('127.0.0.1', 'root', '', 'my_db');
		if(mysqli_connect_errno()){
			echo mysqli_connect_error();
		}
		$time=date('Y-m-d',time());
		$mysqli = mysqli_init();
		$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时
		$mysqli->real_connect('127.0.0.1', 'root', '', 'my_db');
		$mysqli->query("set names 'utf8'");

		$query = "INSERT INTO `diarybook` (`booktitle`, `bookdescription`, `bookcreatetime`, `bookmodifytime`, `userid`) VALUES ('$newbooktitle', '$bookdescription', '$time', '$time', '$name');";
		$results=$mysqli->query($query);
		if($results){
	    	//print 'Success! record updated / deleted'; 
		}else{
		    print 'Error : ('. $mysqli->errno .') '. $mysqli->error;
		}
	}else {
		$booktitle=$_POST["booktitle"];

		$mysqli = new mysqli('127.0.0.1', 'root', '', 'my_db');
		if(mysqli_connect_errno()){
			echo mysqli_connect_error();
		}

		$mysqli = mysqli_init();
		$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时
		$mysqli->real_connect('127.0.0.1', 'root', '', 'my_db');
		$mysqli->query("set names 'utf8'");
//DELETE FROM `my_db`.`lock` WHERE `lock`.`address` = \'momo\'
		$query = "DELETE FROM `diarybook` WHERE `booktitle` = '$booktitle' and `userid` ='$name'";
		$queryd = "DELETE FROM `diary` WHERE `booktitle` = '$booktitle' and `userid` ='$name'";
		$results=$mysqli->query($queryd);
		$results=$mysqli->query($query);
		if($results){
	    	//print 'Success! record updated / deleted'; 
		}else{
		    print 'Error : ('. $mysqli->errno .') '. $mysqli->error;
		}

	}
?>