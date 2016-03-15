<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<link rel="stylesheet" type="text/css" href="../css/editdiary.css">
	<link rel="stylesheet" type="text/css" href="../css/fineround.css">
	<script type="text/javascript" src="http://libs.useso.com/js/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="../js/editdiary.js"></script>
	
	<?php 
		session_start();
		if(isset($_SESSION['user'])){
			$name=$_SESSION['user'];
		}
		if(isset($_GET['booktitle'])){
			$booktitle=$_GET['booktitle'];
		}else{
			$booktitle="";
		}
		if(isset($_GET['diarytitle'])){
			$diarytitle=$_GET['diarytitle'];
		}else{
			$diarytitle="";
		}
		
		$mysqli = new mysqli('127.0.0.1', 'root', '', 'my_db');
		if(mysqli_connect_errno()){
			echo mysqli_connect_error();
		}

		$mysqli = mysqli_init();
		$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时
		$mysqli->real_connect('127.0.0.1', 'root', '', 'my_db');
		$mysqli->query("set names 'utf8'");
		$query="SELECT * FROM `diary` WHERE `userid` = '$name' 
			and `booktitle` = '$booktitle' and `diarytitle` = '$diarytitle'";
		$results=$mysqli->query($query);
		$row = $results->fetch_array();
	?>
	<script type="text/javascript">
		var diarytitle="<?php echo $diarytitle; ?>";
		var booktitle="<?php echo $booktitle; ?>";
	</script>
</head>
<body>
<div class="title">
	<input type="text" class="inputtitle" placeholder="Title" id="inputtitle" value="<?php echo $row[0];?>" />
</div>

<hr noshade class="myhr" size="1px" />	 
<div class="content">
	<textarea class="inputcontent" placeholder="Content" id="inputcontent"><?php echo $row[1];?></textarea>
</div>

<div class="tools">
	<div class="change" onclick="change()">修</div>
	<div class="delete" onclick="deletediary()">删</div>
	<div class="save" onclick="cancle()">回</div>
</div>
</body>
</html>