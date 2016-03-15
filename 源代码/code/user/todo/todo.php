<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./css/todo.css">
	<script type="text/javascript" src="./js/todo.js"></script>
</head>
<body>
	<div id="maindiv">
		<input type="text" class="inputtodo" id="inputtodo" onkeydown="keyDown(event)" />
		<input type="button" class="submitbutton" value="添加" onclick="addtodo()" />


		<div id="contentdiv">
			<?php 
				session_start();
				if(isset($_SESSION['user'])){
					$name=$_SESSION['user'];
				}
				if(isset($_GET['select'])){
					$select=$_GET['select'];
				}else{
					$select=" ";
				}
				// echo "<script>alert('".$select."');</script>";
				$time=date('y-m-d',time());
				$mysqli = new mysqli('127.0.0.1', 'root', '', 'my_db');
				if(mysqli_connect_errno()){
					echo mysqli_connect_error();
				}
				$mysqli = mysqli_init();
				$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时
				$mysqli->real_connect('127.0.0.1', 'root', '', 'my_db');
				$mysqli->query("set names 'utf8'");
				if($select=="basket"){
					$query="SELECT * FROM `todo` WHERE `userid` = '$name' and `project` = '' and `isdone` = '0' and `isdel` = '0'";
				}elseif($select=="past") {
					$query="SELECT * FROM `todo` WHERE `userid` = '$name' and `isdone` = '0' and `isdel` = '0' and `tododate` < '$time'";//$time
				}elseif($select=="today") {
					$query="SELECT * FROM `todo` WHERE `userid` = '$name' and `isdone` = '0' and `isdel` = '0' and `tododate` = '$time'";//$time
				}elseif($select=="tomorrow") {
					$time=date('y-m-d',time()+86400);
					$query="SELECT * FROM `todo` WHERE `userid` = '$name' and `isdone` = '0' and `isdel` = '0' and `tododate` = '$time'";//$time
				}elseif($select=="thisweek") {
					$time1=date('y-m-d',time()-86400);
					$time2=date('y-m-d',time()+86400*7);
					$query="SELECT * FROM `todo` WHERE `userid` = '$name' and `isdone` = '0' and `isdel` = '0' and `tododate` < '$time2' and `tododate` > '$time1'";//$time
				}elseif($select=="further") {
					$time=date('y-m-d',time()+86400*7);
					$query="SELECT * FROM `todo` WHERE `userid` = '$name' and `isdone` = '0' and `isdel` = '0' and `tododate` > '$time'";//$time
				}
				$results=$mysqli->query($query);
				// $number=mysqli_num_rows($results);
				// echo "<script>alert(".$number.");</script>";
				$contactount=0;
				while ($row = $results->fetch_array()) {
					$time=$row[4];
					$pos=strpos($time,"0000");
					if($pos===false){
						
					}else{
						$time="";
					}
					echo "<div class='singletodo' id='singleallold".$contactount."'>
						<div class='isdone' onclick=\"done('singleallold".$contactount."','doneoldimgage".$contactount."','title".$contactount."')\">
							<img src='./img/done.jpg' class='doneimage' id='doneoldimgage".$contactount."'/>
						</div>
						<div class='todoall' onclick=\"replacediv('./todo/edittodo.php?title=".$row[2]."&select=".$select."')\">
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

		<script type="text/javascript">
			var select="<?php echo $select;?>";
		</script>
		</div>


	</div>

</body>
</html>