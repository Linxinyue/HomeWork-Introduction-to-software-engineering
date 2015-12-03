

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
		<div id="changeaddress">
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
		</div>
	</div>

<!-- newdiv -->
<div id="newdiv">
		<div class="buttoncheck" onclick="newsave()">
			<img class="check" src="./img/check.png"/>
		</div>
		<div class="buttoncancle" onclick="newcancle()">
			<img class="cancle" src="./img/cancle.png"/>
		</div>
		<div class="newaddress">
			<input type="text" id="newaddress" placeholder="address" />
		</div>
		
		<div class="accountsceboth">
			<div class="accountname">
				name: 
				<input id="newname" type="text" />
			</div>	
			<div class="accountpwd">
				pawd:
				<input id="newpasswd" type="text" />
				
			</div>
		</div>

		<div class="line"></div>

		<div class="security" id="user1sec">
			<div class="seccontent">
				<div class="accountname">
					secname: 
					<input id="newsecname" type="text" />
				</div>
				<div class="accountpwd">
					secpawd:
					<input id="newsecpasswd"  type="text" />
				</div>
			</div>
		</div>
	</div>

<!-- 默认带安全的显示div -->




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
		$account=$row[0];
		// require('singlelock.php');
		echo "<div class='accountsceshow' id='user".$account."div'>
		<div class='picbutton'>
			<div class='change' onclick=\"change('user".$account."')\">
				<img class='changeimg' src='./img/change.jpg'/>
			</div>
			<div class='deletediv' onclick=\"deleteuser('user".$account."')\">
				<img class='delete' src='./img/cancle.png'/>
			</div>
		</div>
		<div id='user".$account."address' class='address'>".$account."</div>
		<div class='accountsceboth'>
			<div class='accountname'>
				<div class='username'>name:</div>
				<div id='user".$account."name' class='username'>".$row[2]."</div>
			</div>	
			<div class='accountpwd'>
				pawd:
				<input id='user".$account."password' type='password' class='password' value='".$row[3]."' disabled/>
				<div class='showpassword' onclick=\"showpasswd('user".$account."')\">
					<img class='showpasswordimg' src='./img/showpasswd.jpg'/>
				</div>
			</div>
		</div>

		<div class='line'></div>
		<div class='security' id=\"user".$account."sec\">
			<div class='seccontent'>
				<div class='accountname'>
					<div class='username'>name:</div>
					<div id='user".$account."secname' class='username'>".$row[4]."</div>
				</div>	
				<div class='accountpwd'>
					pawd:
					<input  id='user".$account."secpassword' type='password' class='password' value='".$row[5]."' disabled/>
					<div class='showpassword' onclick=\"showsecpasswd('user".$account."')\">
						<img class='showpasswordimg' src='./img/showpasswd.jpg'/>
					</div>
				</div>
			</div>
		</div>
	</div>";
	}
?>
<!-- ///////////////////////////////////////////////// -->

<!-- 添加的div -->

	<div class="plusdiv" onclick="newlock()">
		<img class="plus" src="./img/plus.png" />
	</div>
</body>
</html>