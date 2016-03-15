
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
				<div class="subitem1">姓名：</div>
				<div class="subitem2" id='username'><?php echo $row[2] ?></div>
				<div class="subitem3">
					<input type='text' class="ppfinput" placeholder="姓名" id='inputusername'/>
				</div>
			</div>
			<div class="singleitem">
				<div class="subitem1">生日：</div>
				<div class="subitem2" id='birthday'><?php echo $row[3] ?></div>
				<div class="subitem3">
					<input type='text' class="ppfinput" placeholder="生日" id='inputbirthday'/>
				</div>
			</div>
			<div class="singleitem">
				<div class="subitem1">性别：</div>
				<div class="subitem2" id='sex'><?php echo $row[4] ?></div>
				<div class="subitem3">
					<select id="inputsex" class="selectlist"> 
						<option value="保密" selected = "selected">保密</option> 
						<option value="男">男</option> 
						<option value="女">女</option> 
					</select> 
				</div>
			</div>
			<div class="singleitem">
				<div class="subitem1">血型：</div>
				<div class="subitem2" id='bloodtype'><?php echo $row[5] ?></div>
				<div class="subitem3">
					<select id="inputbloodtype" class="selectlist">
						<option value="未知" selected = "selected">未知</option>
						<option value="O">O</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="AB">AB</option>
						<option value="其他">其他</option>
					</select>
				</div>
			</div>
			<div class="singleitem">
				<div class="subitem1">出生地：</div>
				<div class="subitem2" id='birthplace'><?php echo $row[6] ?></div>
				<div class="subitem3" >
					<input type='text' class="ppfinput" placeholder="出生地" id='inputbirthplace'/>
				</div>
			</div>
			<div class="singleitem">
				<div class="subitem1">居住地：</div>
				<div class="subitem2" id='liveplace'><?php echo $row[7] ?></div>
				<div class="subitem3" >
					<input type='text' class="ppfinput" placeholder="居住地" id='inputliveplace'/>
				</div>
			</div>
			<div class="singleitem">
				<div class="subitem1">个人简介：</div>
				<div class="subitem2" id='simpleinformation'><?php echo $row[8] ?></div>
				<div class="subitem3" >
					<textarea  class="ppftextarea" placeholder="个人简介" id='inputinformation' />
				</div>
			</div>
		</div>
		<div class="tools">
			<div class="change" id='change' onclick="change()">修改</div>
			<div class="change" id='discard' onclick="save()">确认</div>
		</div>
	</div>
</body>
</html>