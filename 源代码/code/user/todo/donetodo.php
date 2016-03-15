<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./css/todo.css">
	<script type="text/javascript" src="./js/todo.js"></script>
</head>
<body>
	<div id="maindiv">
		<div id="contentdiv">
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
				$query="SELECT * FROM `todo` WHERE `userid` = '$name' and `isdone` = '1' and `isdel` = '0'";
				$results=$mysqli->query($query);
				$contactount=0;
				while ($row = $results->fetch_array()) {
					$time=$row[4];
					$pos=strpos($time,"0000");
					if($pos===false){
						
					}else{
						$time="";
					}
					echo "<div class='singletodo' id='singleallold".$contactount."'>
						<div class='isdone' onclick=\"undone('singleallold".$contactount."','doneoldimgage".$contactount."','title".$contactount."')\">
							<img src='./img/done.jpg' class='donepageimage' id='doneoldimgage".$contactount."'/>
						</div>
						<div class='donetodoall'>
							<div class='title' id='title".$contactount."'>".$row[2]."</div>
							<div class='content'>".$row[3]."</div>
							<div class='project'>".$row[5]."</div>
							<div class='date'>".$time."</div>
						</div>
					</div>";
					$contactount+=1;
				}
			
			?>
			<!-- <div class="singletodo" id="singles">
				<div class="isdone" onclick="done('singles','doneimage')">
					<img src="./img/done.jpg" class="doneimage" id="doneimage"/>
				</div>
				<div class="todoall" id="todos" title="./todo/edittodo.php" onclick="replacediv()">
					<div class="title">完成网站2333</div>
					<div class="content">添加少许效果1</div>
					<div class="project">工程导论1</div>
					<div class="date">4010/5/25</div>
				</div>
			</div> -->
		</div>
	</div>
</body>
</html>