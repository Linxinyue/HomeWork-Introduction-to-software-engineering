<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<title>常用密码</title>
	<link rel="stylesheet" type="text/css" href="./css/baselock.css" />
	<link rel="stylesheet" type="text/css" href="./css/yahei.css" />
	<script type="text/javascript" src="./js/baselock.js"></script>
	<script type="text/javascript" src="./js/jquery.min.js"></script>
</head>
<body>
<?php 
	session_start();
	if(isset($_SESSION['user'])){
		$name=$_SESSION['user'];
	}else{
		echo "<script>window.location.href='http://127.0.0.1';</script>";
	}
?>
<div id="maindiv">
	<!-- 修改div -->
<div class="changelock" id="changelock">
	<div class="sublock">
		<div class="lockdesc">
			账号密码
		</div>
		<div class="sublocks">
			<div class="sublockdesc">账号：</div>
			<div class="lockname">
				<input type="text" class="inputlock" id="changename" placeholder="账号" />
			</div>
		</div>
		<div class="sublocks">
			<div class="sublockdesc">密码：</div>
			<div class="lockname">
				<input type="text" class="inputlock" id="changepasswd" placeholder="密码" />
			</div>
		</div>
	</div>
	<div class="sublock" id="subchangelock">
		<div class="lockdesc">
			账号密保
		</div>
		<div class="sublocks">
			<div class="sublockdesc">账号：</div>
			<div class="lockname">
				<input type="text" id="changesecname" class="inputlock" placeholder="账号" />
			</div>
		</div>
		<div class="sublocks">
			<div class="sublockdesc">密保：</div>
			<div class="lockname">
				<input type="text" class="inputlock" id="changesecwd" id="changepasswd" placeholder="密码" />
			</div>
		</div>
	</div>
	<div class="address">
		<input type="text" class="inputlock" id="changeaddress" placeholder="地址" />
	</div>
	<div class="changetools">
		<div class="changetool" onclick="changecancel()">取消</div>
		<div class="changetool" id="changesave" onclick="changesave()">确认</div>
	</div>
</div>


<?php 
	
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
	$mycounter=0;
	while ($row = $results->fetch_array()) {
		$account=$row[0];
		echo "<div class='lockboth' id='lock".$mycounter."'>
		<div class='sublock' id='baselock'>
			<div class='lockdesc'>
				账号密码
			</div>
			<div class='sublocks'>
				<div class='sublockdesc'>账号：</div>
				<div class='lockname'>
					<input type='text' class='inputlock' id='lock".$mycounter."name'  disabled value='".$row[2]."' />
				</div>
			</div>
			<div class='sublocks'>
				<div class='sublockdesc'>密码：</div>
				<div class='lockname'>
					<input type='password' class='inputlock' id='lock".$mycounter."passwd' disabled value='".$row[3]."' />
				</div>
			</div>
		</div>
		<div class='sublock'>
			<div class='lockdesc'>
				账号密保
			</div>
			<div class='sublocks'>
				<div class='sublockdesc'>账号：</div>
				<div class='lockname'>
					<input type='text' class='inputlock' id='lock".$mycounter."secname'  disabled value='".$row[4]."'/>
				</div>
			</div>
			<div class='sublocks'>
				<div class='sublockdesc'>密码：</div>
				<div class='lockname'>
					<input type='password' class='inputlock' id='lock".$mycounter."secwd' disabled value='".$row[5]."' />
				</div>
			</div>
		</div>
		<div class='tools'>
			<div class='tool' id='mi' onclick=\"showpasswd('lock".$mycounter."')\">码</div>
			<div class='tool' id='ba' onclick=\"showsecpasswd('lock".$mycounter."')\">保</div>
			<div class='tool' id='xu' onclick=\"change('lock".$mycounter."','".$row[0]."')\">修</div>
			<div class='tool' id='sh' onclick=\"deleteuser('lock".$mycounter."','".$row[0]."')\">删</div>
		</div>
		<div class='address' id='lock".$mycounter."address'>".$row[0]."</div>
	</div>";
		$mycounter+=1;
	}
?>
<!-- ///////////////////////////////////////////////// -->

<!-- 添加的div -->
	<div class="newlock" onclick="newlock()">
		添加
	</div>
	<!-- <div class="plusdiv" onclick="newlock()">
		<img class="plus" src="./img/plus.png" />
	</div> -->
</div>

</body>
</html>