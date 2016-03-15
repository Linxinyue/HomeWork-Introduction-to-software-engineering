<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./css/yahei.css" />
	<link rel="stylesheet" type="text/css" href="./css/singlecontact.css" />
	<script type="text/javascript" src="./js/singlecontact.js"></script>
</head>
<body>
<div class="information">
	<?php 
		session_start();
		if(isset($_SESSION['user'])){
			$name=$_SESSION['user'];
		}
		if(isset($_GET['contactname'])){
			$contactname=$_GET['contactname'];
		}else{
			$contactname="";
		}
		$mysqli = mysqli_init();
		$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时
		$mysqli->real_connect('127.0.0.1', 'root', '', 'my_db');
		$mysqli->query("set names 'utf8'");
		$query="SELECT * FROM `contact` WHERE `userid` = '$name' and `contactname` = '$contactname'";
		$results=$mysqli->query($query);
		$row = $results->fetch_array();
	?>

	<div class="photo">
		<img src="./img/girl.jpg" class="photo" />
	</div>
	<div class="name" id="contactname"><?php echo $row[2]; ?></div>
	<div class="name" id="inputname">
		<input type="text" placeholder="姓名" class="inputname" />
	</div>
	<div class="phone">
		<div class="phonedec">
			电话
		</div>
		<div class="phoneconent" id="phonecontent"><?php echo $row[3]; ?></div>
		<div class="phoneconent" id="inputphone">
			<input type="text" placeholder="电话" class="inputphone" />
		</div>
	</div>
	<div class="company">
		<div class="phonedec">
			公司
		</div>
		<div class="phoneconent" id="companycontent"><?php echo $row[4]; ?></div>
		<div class="phoneconent" id="inputcompany">
			<input type="text" placeholder="公司或标签" class="inputphone" value="" />
		</div>
	</div>
	<div class="note">
		备注
	</div>
	<div class="notecontent" id="notecontent"><?php echo $row[5]; ?></div>
	<div class="notecontent" id="inputnote">
		<textarea class="inputnote" placeholder="备注"></textarea>
	</div>

	<div class="tools">
		<div class="deletecontact" id="deltools" onclick="deletecon()">删除</div>
		<div class="editcontact" id="chatools" onclick="change()">编辑</div>
	</div>
</div>

</body>
</html>