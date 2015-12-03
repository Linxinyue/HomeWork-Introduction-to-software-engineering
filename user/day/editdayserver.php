<?php
	//echo "正在保存...";
	session_start();
	if(isset($_SESSION['user'])){
		$name=$_SESSION['user'];
	}
	$option=$_POST["option"];
	if ($option=="change") {
		$diarytitle=$_POST["diarytitle"];
		$booktitle=$_POST["booktitle"];
		$diarycontent=$_POST["content"];
		$newdiarytitle=$_POST["newdiarytitle"];

		$mysqli = new mysqli('127.0.0.1', 'root', '', 'my_db');
		if(mysqli_connect_errno()){
			echo mysqli_connect_error();
		}

		$mysqli = mysqli_init();
		$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时
		$mysqli->real_connect('127.0.0.1', 'root', '', 'my_db');
		$mysqli->query("set names 'utf8'");
		//$query="SELECT * FROM `informations` WHERE `name` = '$name'";
		$query="UPDATE `diary` SET `diarytitle`='$newdiarytitle',`diarycontent`='$diarycontent' WHERE userid='$name' and booktitle = '$booktitle' and diarytitle='$diarytitle' ";

		//$sql = "UPDATE `informations` SET `realname`='新月' WHERE name='xinyue'";
		$results=$mysqli->query($query);
		if($results){
	    	//print 'Success! record updated / deleted'; 
		}else{
		    print 'Error : ('. $mysqli->errno .') '. $mysqli->error;
		}
		//$row = $results->fetch_array();
	} elseif ($option=="new") {
		$booktitle=$_POST["booktitle"];
		$content=$_POST["content"];
		$newdiarytitle=$_POST["newdiarytitle"];

		$mysqli = new mysqli('127.0.0.1', 'root', '', 'my_db');
		if(mysqli_connect_errno()){
			echo mysqli_connect_error();
		}
		$time=date('Y-m-d',time());
		$mysqli = mysqli_init();
		$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时
		$mysqli->real_connect('127.0.0.1', 'root', '', 'my_db');
		$mysqli->query("set names 'utf8'");

		$query = "INSERT INTO `diary` (`diarytitle`, `diarycontent`, `diarycreatetime`, `diarymodifytime`, `userid`, `booktitle`) VALUES ('$newdiarytitle', '$content', '$time', '$time', '$name', '$booktitle');";
		$results=$mysqli->query($query);
		if($results){
	    	//print 'Success! record updated / deleted'; 
		}else{
		    print 'Error : ('. $mysqli->errno .') '. $mysqli->error;
		}
	}else {
		$booktitle=$_POST["booktitle"];
		$diarytitle=$_POST["diarytitle"];
		$mysqli = new mysqli('127.0.0.1', 'root', '', 'my_db');
		if(mysqli_connect_errno()){
			echo mysqli_connect_error();
		}

		$mysqli = mysqli_init();
		$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时
		$mysqli->real_connect('127.0.0.1', 'root', '', 'my_db');
		$mysqli->query("set names 'utf8'");
//DELETE FROM `my_db`.`lock` WHERE `lock`.`address` = \'momo\'
		$query = "DELETE FROM `diary` WHERE `booktitle` = '$booktitle' and `userid` ='$name' and diarytitle='$diarytitle';";
		$results=$mysqli->query($query);
		if($results){
	    	//print 'Success! record updated / deleted'; 
		}else{
		    print 'Error : ('. $mysqli->errno .') '. $mysqli->error;
		}

	}
?>