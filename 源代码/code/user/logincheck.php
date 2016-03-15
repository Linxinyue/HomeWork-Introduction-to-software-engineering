<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<?php
	if(isset($_POST["submit"]) && $_POST["submit"] == "登录")
	{
			$user = $_POST["username"];
			$pwd = $_POST["password"];
			$mysqli = new mysqli('127.0.0.1', 'root', '', 'my_db');
			if(mysqli_connect_errno())
			{
			    echo mysqli_connect_error();
			}
			$mysqli = mysqli_init();
			$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时间
			$mysqli->real_connect('127.0.0.1', 'root', '', 'my_db'); 
			$query="select name,password from users where name = '$_POST[username]' and password = '$_POST[password]'";
			$result=$mysqli->query($query);
			
			if($result->fetch_row()!=0)
			{
				session_start();
				$_SESSION['isLogin']=1;
				$_SESSION['user']=$user;
				echo '<script language=javascript>window.location.href="index.php"</script>';
			}
			else
			{
				 echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";
			}
			$result->free();
			$mysqli->close();
			
	}
	else if(isset($_POST["submit"]) && $_POST["submit"] == "注册")
	{
			$user = $_POST["username"];
			$pwd = $_POST["password"];
			$mysqli = new mysqli('127.0.0.1', 'root', '', 'my_db');
			if(mysqli_connect_errno())
			{
			    echo mysqli_connect_error();
			}
			$mysqli = mysqli_init();
			$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时间
			$mysqli->real_connect('127.0.0.1', 'root', '', 'my_db'); 
			$query="select name from users where name = '$_POST[username]'";
			$result=$mysqli->query($query);
			
			if($result->fetch_row()!=0){
				echo "<script>alert('用户名已被注册，请尝试其他用户名！');history.go(-1);</script>";
				
			}else{
				$results = $mysqli->query("SELECT * FROM `users` WHERE 1");
				$nextId=count($results->fetch_all())+1;
				$insert="INSERT INTO `users`(`id`, `name`, `password`) VALUES ('$nextId','$user','$pwd')";
				$mysqli->query($insert);
				/*print '<table border="1">';
				while($row = $results->fetch_assoc()) {
				    print '<tr>';
				    print '<td>'.$row["id"].'</td>';
				    print '<td>'.$row["name"].'</td>';
				    print '<td>'.$row["password"].'</td>';
				    print '</tr>';
				}  
				print '</table>';*/
				echo $nextId;
				session_start();
				$_SESSION['isLogin']=1;
				$_SESSION['user']=$user;
				//echo '<script language=javascript>window.location.href="index.php"</script>';
			}
			
			$result->free();
			$mysqli->close();
	}
	else
	{
		echo "<script>alert('尚未登录'); history.go(-1);</script>";
	}

?>