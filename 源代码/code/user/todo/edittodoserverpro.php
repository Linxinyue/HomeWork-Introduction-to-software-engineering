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
// $number=mysqli_num_rows($results);
		$idname=$name.$newtitle;
		$mysqli = new mysqli('127.0.0.1', 'root', '', 'my_db');
		if(mysqli_connect_errno()){
			echo mysqli_connect_error();
		}
		$mysqli = mysqli_init();
		$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时
		$mysqli->real_connect('127.0.0.1', 'root', '', 'my_db');
		$mysqli->query("set names 'utf8'");
		$query="SELECT * FROM `todoproject` WHERE `userid` = '$name' and `todoprojectname` = '$title' ";
		$results=$mysqli->query($query);
		if($results){
			$number=mysqli_num_rows($results);
			if($number==0){
				$query = "INSERT INTO `todoproject` (`idname`, `userid`, `todoprojectname`, `todoprojectdesc`) VALUES ('$idname', '$name', '$newtitle', '$content');";
				$results=$mysqli->query($query);
				if($results){}else{print 'Error : ('. $mysqli->errno .') '. $mysqli->error;}
			}else{
				$query1="UPDATE `todoproject` SET `idname`='$idname',`todoprojectname`='$newtitle' ,`todoprojectdesc`='$content' WHERE userid='$name' and todoprojectname = '$title'";
				$query2="UPDATE `todo` SET `project`='$newtitle' WHERE userid='$name' and project = '$title'";
				$results1=$mysqli->query($query1);
				$results2=$mysqli->query($query2);
				if($results1||$results2){}else{print 'Error : ('. $mysqli->errno .') '. $mysqli->error;}
			}
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
		$query1="DELETE FROM `todoproject` WHERE `todoprojectname` = '$title'";
		$query2="DELETE FROM `todo` WHERE `project` = '$title'";
		$results1=$mysqli->query($query1);
		$results2=$mysqli->query($query2);
		if($results1||$results2){
	    	//print 'Success! record updated / deleted'; 
		}else{
		    print 'Error : ('. $mysqli->errno .') '. $mysqli->error;
		}
	}else{

	}
?>