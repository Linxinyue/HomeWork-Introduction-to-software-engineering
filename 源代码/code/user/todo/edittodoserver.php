<?php
	//echo "正在保存...";
	session_start();
	if(isset($_SESSION['user'])){
		$name=$_SESSION['user'];
	}
	$option=$_POST["option"];
// option,title,content,tododate,project,isdone,isdele

	if ($option=="change") {
		$title=$_POST["title"];
		$newtitle=$_POST["newtitle"];
		$content=$_POST["content"];
		$tododate=$_POST["tododate"];
		$project=$_POST["project"];

		$mysqli = new mysqli('127.0.0.1', 'root', '', 'my_db');
		if(mysqli_connect_errno()){
			echo mysqli_connect_error();
		}

		$mysqli = mysqli_init();
		$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时
		$mysqli->real_connect('127.0.0.1', 'root', '', 'my_db');
		$mysqli->query("set names 'utf8'");
		$idname=$name.$newtitle;
		$query="UPDATE `todo` SET `idname`='$idname',`title`='$newtitle',`content`='$content' ,`tododate`='$tododate' ,`project`='$project' WHERE userid='$name' and title = '$title' ";

	
		$results=$mysqli->query($query);
		if($results){
	    	//print 'Success! record updated / deleted'; 
		}else{
		    print 'Error : ('. $mysqli->errno .') '. $mysqli->error;
		}
	} elseif ($option=="new") {
// option,title,content,tododate,project,isdone,isdele
		$title=$_POST["title"];
		$idname=$name.$title;
		$mysqli = new mysqli('127.0.0.1', 'root', '', 'my_db');
		if(mysqli_connect_errno()){
			echo mysqli_connect_error();
		}
		$time=date('Y-m-d',time());
		$mysqli = mysqli_init();
		$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时
		$mysqli->real_connect('127.0.0.1', 'root', '', 'my_db');
		$mysqli->query("set names 'utf8'");

		$query = "INSERT INTO `todo` (`idname`, `userid`, `title`, `content`, `tododate`, `project`, `isdone`, `isdel`) VALUES ('$idname', '$name', '$title', '', '$time', '', '0', '0');";
		$results=$mysqli->query($query);
		if($results){
	    	//print 'Success! record updated / deleted'; 
		}else{
		    print 'Error : ('. $mysqli->errno .') '. $mysqli->error;
		}
	}elseif($option=="delete"){
		$title=$_POST["title"];

		$mysqli = new mysqli('127.0.0.1', 'root', '', 'my_db');
		if(mysqli_connect_errno()){
			echo mysqli_connect_error();
		}

		$mysqli = mysqli_init();
		$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时
		$mysqli->real_connect('127.0.0.1', 'root', '', 'my_db');
		$mysqli->query("set names 'utf8'");
//DELETE FROM `my_db`.`lock` WHERE `lock`.`address` = \'momo\'
		$query="UPDATE `todo` SET `isdel`='1' WHERE userid='$name' and title = '$title' ";
		$results=$mysqli->query($query);
		if($results){
	    	//print 'Success! record updated / deleted'; 
		}else{
		    print 'Error : ('. $mysqli->errno .') '. $mysqli->error;
		}

	}elseif($option=="undel"){
		$title=$_POST["title"];

		$mysqli = new mysqli('127.0.0.1', 'root', '', 'my_db');
		if(mysqli_connect_errno()){
			echo mysqli_connect_error();
		}

		$mysqli = mysqli_init();
		$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时
		$mysqli->real_connect('127.0.0.1', 'root', '', 'my_db');
		$mysqli->query("set names 'utf8'");
//DELETE FROM `my_db`.`lock` WHERE `lock`.`address` = \'momo\'
		$query="UPDATE `todo` SET `isdel`='0' WHERE userid='$name' and title = '$title' ";
		$results=$mysqli->query($query);
		if($results){
	    	//print 'Success! record updated / deleted'; 
		}else{
		    print 'Error : ('. $mysqli->errno .') '. $mysqli->error;
		}

	}elseif($option=="done"){
		$title=$_POST["title"];

		$mysqli = new mysqli('127.0.0.1', 'root', '', 'my_db');
		if(mysqli_connect_errno()){
			echo mysqli_connect_error();
		}

		$mysqli = mysqli_init();
		$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时
		$mysqli->real_connect('127.0.0.1', 'root', '', 'my_db');
		$mysqli->query("set names 'utf8'");
//DELETE FROM `my_db`.`lock` WHERE `lock`.`address` = \'momo\'
		$query="UPDATE `todo` SET `isdone`='1' WHERE userid='$name' and title = '$title' ";
		$results=$mysqli->query($query);
		if($results){
	    	//print 'Success! record updated / deleted'; 
		}else{
		    print 'Error : ('. $mysqli->errno .') '. $mysqli->error;
		}

	}elseif($option=="undone"){
		$title=$_POST["title"];

		$mysqli = new mysqli('127.0.0.1', 'root', '', 'my_db');
		if(mysqli_connect_errno()){
			echo mysqli_connect_error();
		}

		$mysqli = mysqli_init();
		$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时
		$mysqli->real_connect('127.0.0.1', 'root', '', 'my_db');
		$mysqli->query("set names 'utf8'");
//DELETE FROM `my_db`.`lock` WHERE `lock`.`address` = \'momo\'
		$query="UPDATE `todo` SET `isdone`='0' WHERE userid='$name' and title = '$title' ";
		$results=$mysqli->query($query);
		if($results){
	    	//print 'Success! record updated / deleted'; 
		}else{
		    print 'Error : ('. $mysqli->errno .') '. $mysqli->error;
		}

	}else{

	}
?>