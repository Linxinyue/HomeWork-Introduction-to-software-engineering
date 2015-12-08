<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<link rel="stylesheet" type="text/css" href="./css/edittodo.css" />
	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript" src="./js/edittodo.js"></script>
	<script type="text/javascript" src="./js/jquery.DatePicker.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/yahei.css" />
</head>
<body>
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
		if(isset($_GET['select'])){
			$select=$_GET['select'];
		}else{
			$select="";
		}
		// echo "<script>alert('".$title."');</script>";
		$mysqli = new mysqli('127.0.0.1', 'root', '', 'my_db');
		if(mysqli_connect_errno()){
			echo mysqli_connect_error();
		}
		$mysqli = mysqli_init();
		$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时
		$mysqli->real_connect('127.0.0.1', 'root', '', 'my_db');
		$mysqli->query("set names 'utf8'");
		// if($select=="basket"){
		$query="SELECT * FROM `todo` WHERE `userid` = '$name' and `title` = '$title' and `isdone` = '0' and `isdel` = '0'";
		// }
		$results=$mysqli->query($query);
		$row = $results->fetch_array();
		$time=$row[4];
		$pos=strpos($time,"0000");
		if($pos===false){
				
		}else{
			$time=date('y-m-d',time());
		}
		$project=$row[5];
		if ($project=="") {
			$project="请选择项目";
		}
	?>
	<div id="mainedit">
		<div class="back"  title="./todo/todo.php?select=<?php echo $select; ?>">
			< 返回 
		</div>
		<div class="timeproject">
			<input type="text" id="date_picker_demo" value="<?php echo $time; ?>" />
			<div class="selectproject">
				<div class="nowproject" id="nowproject" onclick="chooseeproject()"><?php echo $project;?></div>
				<div class="otherproject" id="otherprojcet">
					<?php 
						$mysqlid = new mysqli('127.0.0.1', 'root', '', 'my_db');
						if(mysqli_connect_errno()){
							echo mysqli_connect_error();
						}
						$mysqlid = mysqli_init();
						$mysqlid->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时
						$mysqlid->real_connect('127.0.0.1', 'root', '', 'my_db');
						$mysqlid->query("set names 'utf8'");
						$queryd="SELECT * FROM `todoproject` WHERE `userid` = '$name'";
						$resultsd=$mysqlid->query($queryd);
						while ($rowd = $resultsd->fetch_array()) {
							echo "<div class='projectls'>".$rowd[2]."</div>";
						}

					?>	
					<div class='projectls'>请选择项目</div>
				</div>
			</div>
			<?php echo $row[5]?>
		</div>
		<div class="todo">
			<div class="isdone" >
				<img src="./img/done.jpg" class="doneimage" id="doneimage"/>
			</div>
			<div class="todotitle"><input type="text" class="inputtitle" value="<?php echo $row[2]; ?>" /></div>
			<div class="desc"><textarea class="inputdesc"><?php echo $row[3]; ?></textarea></div>
			<div class="tools">
				<input type="button" class="buttonsub" value="确认" />
				<input type="button" class="buttondel" value="删除" />
			</div>
		</div> 
	</div>
	

</body>
</html>