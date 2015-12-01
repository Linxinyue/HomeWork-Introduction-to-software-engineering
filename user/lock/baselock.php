<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<title>常用密码</title>
	<link rel="stylesheet" type="text/css" href="./css/baselock.css" />
	<script type="text/javascript" src="./js/baselock.js"></script>
	<script type="text/javascript" src="http://libs.useso.com/js/jquery/1.7.2/jquery.min.js"></script>
</head>
<body>
<!-- 修改div -->
<div id="changdiv">
		<div class="buttoncheck" onclick="save()">
			<img class="check" src="./img/check.png"/>
		</div>
		<div class="buttoncancle" onclick="cancle()">
			<img class="cancle" src="./img/cancle.png"/>
		</div>
		<div class="accountsceboth">
			<div class="accountname">
				name: 
				<input id="changename" type="text" />
			</div>	
			<div class="accountpwd">
				pawd:
				<input id="changepasswd" type="text" />
				
			</div>
		</div>

		<div class="line"></div>

		<div class="security" id="user1sec">
			<div class="seccontent" onclick="test1()">
				<div class="accountname">
					secname: 
					<input id="changesecname" type="text" />
				</div>
				<div class="accountpwd">
					secpawd:
					<input id="changesecpasswd"  type="text" />
				</div>
			</div>
			<div id="newplusdiv" >
				<img onclick="addsec()" class="newplus" src="./img/plus.png" />
			</div>
		</div>
	</div>

<!-- 默认显示的div样式1 -->
	<div class="accountshow" id="userdiv">
		<div class="picbutton">
			<div class="change" onclick="change('user')">
				<img class="changeimg" src="./img/change.jpg"/>
			</div>
			<div class="deletediv" onclick="deleteuser('user')">
				<img class="delete" src="./img/cancle.png"/>
			</div>
		</div>
		
		<div class="accountboth">
			<div class="accountname">
				<div class="username">name:</div>
				<div id="username" class="username">xinyue</div>
			</div>	
			<div class="accountpwd">
				pawd:
				<input id="userpassword" class="password" type="password" value="123456sdfsdf" disabled />
				<div class="showpassword" onclick="showpasswd('user')">
					<img class="showpasswordimg" src="./img/showpasswd.jpg"/>
				</div>
			</div>
		</div>
	</div>
	<div id="usersec" title="none"></div>

<!-- 默认带安全的显示div -->


<div class="accountsceshow" id="user1div">
		<div class="picbutton">
			<div class="change" onclick="change('user1')">
				<img class="changeimg" src="./img/change.jpg"/>
			</div>
			<div class="deletediv" onclick="deleteuser('user1')">
				<img class="delete" src="./img/cancle.png"/>
			</div>
		</div>
		<div class="accountsceboth">
			<div class="accountname">
				<div class="username">name:</div>
				<div id="user1name" class="username">xinyue1</div>
			</div>	
			<div class="accountpwd">
				pawd:
				<input id="user1password" type="password" class="password" value="123456789" disabled/>
				<div class="showpassword" onclick="showpasswd('user1')">
					<img class="showpasswordimg" src="./img/showpasswd.jpg"/>
				</div>
			</div>
		</div>

		<div class="line"></div>
		<div class="security">
			<div class="seccontent">
				<div class="accountname">
					<div class="username">name:</div>
					<div id="user1secname" class="username">xinyue</div>
				</div>	
				<div class="accountpwd">
					pawd:
					<input  id="user1secpassword" type="password" class="password" value="123456sdfsdf" disabled/>
					<div class="showpassword" onclick="showsecpasswd('user1')">
						<img class="showpasswordimg" src="./img/showpasswd.jpg"/>
					</div>
				</div>
			</div>
			<div id="newplusdiv" >
				<img onclick="test2()" class="newplus" src="./img/plus.png" />
			</div>
		</div>
	</div>


<!-- ////////////////////////////////////////////////// -->

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
		echo $row[2];
		include('singlelock.php');
	}
?>
<!-- ///////////////////////////////////////////////// -->
<!-- 添加的div -->

	<div class="plusdiv" onclick="addplus">
		<img class="plus" src="./img/plus.png"/>
	</div>
</body>
</html>