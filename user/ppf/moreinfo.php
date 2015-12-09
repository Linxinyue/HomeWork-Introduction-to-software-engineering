
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<script src="./js/jquery.min.js"></script>
	<script src="./js/baseinfo.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/baseinfo.css">
	<link rel="stylesheet" type="text/css" href="./css/yahei.css">
</head>
<body>
	<?php 
		session_start();
		if(isset($_SESSION['user'])){
			$name=$_SESSION['user'];
		}
		$mysqli = new mysqli('127.0.0.1', 'root', '', 'my_db');
		if(mysqli_connect_errno()){
			echo mysqli_connect_error();
		}
		$mysqli = mysqli_init();
		$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时
		$mysqli->real_connect('127.0.0.1', 'root', '', 'my_db');
		$mysqli->query("set names 'utf8'");
		$query="SELECT * FROM `informations` WHERE `name` = '$name'";
		$results=$mysqli->query($query);
		$row = $results->fetch_array();
	?>
	<script type="text/javascript">var names="<?php echo $name; ?>";</script>
	<div class="baseinformation">
		<div class="ppfinformationtitle">基本资料</div>
		<div class="maininformation">
			<div class="singleitem">
				<div class="subitem1">体型：</div>
				<div class="subitem2" id='fig'><?php echo $row[9] ?></div>
				<div class="subitem3">
					<input type='text' class="ppfinput" placeholder="体型" id='inputfig'/>
				</div>
			</div>
			<div class="singleitem">
				<div class="subitem1">婚姻：</div>
				<div class="subitem2" id='mar'><?php echo $row[10] ?></div>
				<div class="subitem3">
					<input type='text' class="ppfinput" placeholder="婚姻" id='inputmar'/>
				</div>
			</div>
			<div class="singleitem">
				<div class="subitem1">个人习惯：</div>
				<div class="subitem2" id='hab'><?php echo $row[11] ?></div>
				<div class="subitem3">
					<input type='text' class="ppfinput" placeholder="个人习惯" id='inputhai'/>
				</div>
			</div>
			<div class="singleitem">
				<div class="subitem1">性格：</div>
				<div class="subitem2" id='cha'><?php echo $row[12] ?></div>
				<div class="subitem3">
					<input type='text' class="ppfinput" placeholder="性格" id='inputcha'/>
				</div>
			</div>
			<div class="singleitem">
				<div class="subitem1">教育程度：</div>
				<div class="subitem2" id='edu'><?php echo $row[13] ?></div>
				<div class="subitem3" >
					<input type='text' class="ppfinput" placeholder="教育程度" id='inputedu'/>
				</div>
			</div>
			<div class="singleitem">
				<div class="subitem1">当前职业：</div>
				<div class="subitem2" id='job'><?php echo $row[14] ?></div>
				<div class="subitem3" >
					<input type='text' class="ppfinput" placeholder="当前职业" id='inputjob'/>
				</div>
			</div>
			<div class="singleitem">
				<div class="subitem1">联系方式：</div>
				<div class="subitem2" id='con'><?php echo $row[15] ?></div>
				<div class="subitem3" >
					<input type='text' class="ppfinput" placeholder="联系方式" id='inputcon'/>
				</div>
			</div>
		</div>
		<div class="tools">
			<div class="change" id='change' onclick="changemore()">修改</div>
			<div class="change" id='discard' onclick="savemore()">确认</div>
		</div>
	</div>
</body>
</html>