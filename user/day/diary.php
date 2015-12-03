<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./css/daliy.css" />
	<script type="text/javascript" src="./js/daliy.js"></script>
</head>
<body>
<div class="diarys">
	<!-- <div class="arcitle" onclick="gotoeditdiary()">
		<div class="diarytitle">
			迷梦记
		</div>
		<div class="diarycontent" >
			二月七日惊蛰
			你来了，我来了！你不该来，可我还是来了，
			落日，荒漠，客栈...
		</div>
		<div class="diarycreattime">
			2015年11月27日08:17:56
		</div>
		<div class="diarymodtime">
			2015年11月27日08:18:08
		</div>
	</div> -->
	<?php 
		session_start();
		if(isset($_SESSION['user'])){
			$name=$_SESSION['user'];
		}
		if(isset($_GET['title'])){
			$title=$_GET['title'];
		}else{
			$title="";
		}
		
		$mysqli = new mysqli('127.0.0.1', 'root', '', 'my_db');
		if(mysqli_connect_errno()){
			echo mysqli_connect_error();
		}

		$mysqli = mysqli_init();
		$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时
		$mysqli->real_connect('127.0.0.1', 'root', '', 'my_db');
		$mysqli->query("set names 'utf8'");
		$query="SELECT * FROM `diary` WHERE `userid` = '$name' and `booktitle` = '$title'";
		$results=$mysqli->query($query);

		while ($row = $results->fetch_array()) {
			$account=$row[0];
			// require('singlelock.php');
			echo "<div class='arcitle' onclick=\"gotoeditdiary('".$row[0]."')\">
			<div class='diarytitle'>
				".$row[0]."
			</div>
			<div class='diarycontent' >
				".substr($row[1],0,40)."...
			</div>
			<div class='diarycreattime'>
				创建日期：".$row[2]."
			</div>
			<div class='diarymodtime'>
				最近修改：".$row[3]."
			</div>
		</div>";
		}
	?>	
	<script type="text/javascript">
		var booktitle="<?php echo $title; ?>";
	</script>
	<div class="plusdiv" onclick="gotonewdiary()">
		<img class="plus" src="./img/plus.png" />
	</div>
</div>
	
</body>
</html>