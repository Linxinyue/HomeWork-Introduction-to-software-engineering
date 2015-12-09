<!DOCTYPE html>
<html>
<head>
	<?php include('header.php');?>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript" src="./js/index.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/index.css">
	<title>ToDo</title>
	
</head>
<body>
	<div>
		<div class="left" id='left'>
			<div class="left_title">收集</div>
				<div class="left_item" id='basket' 
					onmouseover="todo_selected('basket')" 
					onmouseout="todo_unselected('basket')" title="./todo/todo.php?select=basket">收集箱</div>
			<div class="left_title" id="focus" 
					onmouseover="todo_selected('focus')" 
					onmouseout="todo_unselected('focus')">聚焦</div>
			<div id='focuses'>
				<div class="left_item" id='outdate' 
					onmouseover="todo_selected('outdate')" 
					onmouseout="todo_unselected('outdate')" title="./todo/todo.php?select=past">已过期</div>
				<div class="left_item" id='today' 
					onmouseover="todo_selected('today')" 
					onmouseout="todo_unselected('today')" title="./todo/todo.php?select=today">今日</div>
				<div class="left_item" id='torrow' 
					onmouseover="todo_selected('torrow')" 
					onmouseout="todo_unselected('torrow')" title="./todo/todo.php?select=tomorrow">明天</div>
				<div class="left_item" id='week' 
					onmouseover="todo_selected('week')" 
					onmouseout="todo_unselected('week')" title="./todo/todo.php?select=thisweek">本周</div>
				<!-- <div class="left_item" id='schedule' 
					onmouseover="todo_selected('schedule')" 
					onmouseout="todo_unselected('schedule')" title="./todo/todo.php?select=time">日程</div> -->
				<div class="left_item" id='further' 
					onmouseover="todo_selected('further')" 
					onmouseout="todo_unselected('further')" title="./todo/todo.php?select=further">未来</div>
			</div>
				
			<div class="left_title2" id='all_project' 
					onmouseover="todo_selected('all_project')" 
					onmouseout="todo_unselected('all_project')">所有项目</div>

			<div id='projects'>
				<?php 
					// session_start();
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
					$query="SELECT * FROM `todoproject` WHERE `userid` = '$name'";
					$results=$mysqli->query($query);
					$counter=0;
					while ($row = $results->fetch_array()) {
						echo "<div class='left_item' id='task".$counter."' 
							onmouseover=\"todo_selected('task".$counter."')\" 
							onmouseout=\"todo_unselected('task".$counter."')\" 
							title='./todo/projecttodo.php?protitle=".$row[2]."'>".$row[2]."</div>";
						$counter+=1;
					}
				?>	
				<div class='left_item' id='newproject' 
					onmouseover="todo_selected('newproject')" 
					onmouseout="todo_unselected('newproject')" title='./todo/todo.php'>新建</div>
			</div>
			<div class="left_title2" id='finnash' 
					onmouseover="todo_selected('finnash')" 
					onmouseout="todo_unselected('finnash')">已完成</div>
			<div id='finnashes'>
				<div class="left_item" id='finished' 
					onmouseover="todo_selected('finished')" 
					onmouseout="todo_unselected('finished')" title="./todo/donetodo.php">已完成</div>
				<div class="left_item" id='deleted' 
					onmouseover="todo_selected('deleted')" 
					onmouseout="todo_unselected('deleted')" title="./todo/deltodo.php">垃圾箱</div>
			</div>
				
		</div>
		<div id="right" class="right">
			
		</div>
		<script type="text/javascript">
			document.getElementById('left').style.maxHeight=hi+"px";
			document.getElementById('left').style.height=hi+"px";
		</script>
	</div>
</body>
</html>

<?php 
	//include('../footer.html');
?>