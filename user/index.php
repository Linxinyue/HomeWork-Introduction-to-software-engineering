<!DOCTYPE html>
<html>
<head>
	<?php include('header.php');?>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<script type="text/javascript" src="http://libs.useso.com/js/jquery/1.7.2/jquery.min.js"></script>
	<title>ToDo</title>
	<style type="text/css">
		body{
			margin: 0 0;
			padding:0 0;
			margin-top: 60px;
		}
		a{
			text-decoration: none;
		}
		.left{
			float: left;
			width: 230px;
			background-color: #DCE5E3;
			overflow: auto;
		}
		.right{
			float: left;
			margin-left: 230px;
		}
		.left_title{
			padding-left: 15px;
			padding-top: 10px;
			padding-bottom: 10px;
			font-size: 11pt;
			color: #87888A;
		}
		.left_item{
			width:163px;
			padding-top: 5px;
			padding-bottom: 5px;
			padding-left: 45px;
			font-size: 12pt;
		}
		.left_title2{
			padding-left: 15px;
			padding-top: 10px;
			padding-bottom: 10px;
			font-size: 11pt;
			color: #87888A;
		}
	</style>
	<script type="text/javascript">
		var hi=innerHeight-60;
		$(document).ready(function(){
		  $("#all_project").click(function(){
		    $("#projects").slideToggle("slow");
		  });
		  $("#finnash").click(function(){
		    $("#finnashes").slideToggle("slow");
		  });
		  $("#focus").click(function(){
		    $("#focuses").slideToggle("slow");
		  });
		});
		function todo_selected(selecetedid) {
			document.getElementById(selecetedid).style.background='#BACAC1';
		}
		function todo_unselected(selecetedid) {
			document.getElementById(selecetedid).style.background='#DCE5E3';
		}
	</script>
</head>
<body>
	<div>
		<div class="left" id='left'>
			<div class="left_title">收集</div>
				<div class="left_item" id='basket' 
					onmouseover="todo_selected('basket')" 
					onmouseout="todo_unselected('basket')">任务篮</div>
			<div class="left_title" id="focus" 
					onmouseover="todo_selected('focus')" 
					onmouseout="todo_unselected('focus')">聚焦</div>
			<div id='focuses'>
				<div class="left_item" id='today' 
					onmouseover="todo_selected('today')" 
					onmouseout="todo_unselected('today')">今日</div>
				<div class="left_item" id='next' 
					onmouseover="todo_selected('next')" 
					onmouseout="todo_unselected('next')">下一步</div>
				<div class="left_item" id='torrow' 
					onmouseover="todo_selected('torrow')" 
					onmouseout="todo_unselected('torrow')">明天</div>
				<div class="left_item" id='week' 
					onmouseover="todo_selected('week')" 
					onmouseout="todo_unselected('week')">本周</div>
				<div class="left_item" id='schedule' 
					onmouseover="todo_selected('schedule')" 
					onmouseout="todo_unselected('schedule')">日程</div>
				<div class="left_item" id='further' 
					onmouseover="todo_selected('further')" 
					onmouseout="todo_unselected('further')">未来</div>
			</div>
				
			<div class="left_title2" id='all_project' 
					onmouseover="todo_selected('all_project')" 
					onmouseout="todo_unselected('all_project')">所有项目</div>
			<div id='projects'>
				<div class="left_item" id='task1' 
					onmouseover="todo_selected('task1')" 
					onmouseout="todo_unselected('task1')">项目一</div>
				<div class="left_item" id='task2' 
					onmouseover="todo_selected('task2')" 
					onmouseout="todo_unselected('task2')">项目一</div>
				<div class="left_item" id='task3' 
					onmouseover="todo_selected('task3')" 
					onmouseout="todo_unselected('task3')">项目一</div>
				<div class="left_item" id='task4' 
					onmouseover="todo_selected('task4')" 
					onmouseout="todo_unselected('task4')">项目一</div>
				<div class="left_item" id='task5' 
					onmouseover="todo_selected('task5')" 
					onmouseout="todo_unselected('task5')">项目一</div>
				<div class="left_item" id='task6' 
					onmouseover="todo_selected('task6')" 
					onmouseout="todo_unselected('task6')">项目一</div>
				<div class="left_item" id='task7' 
					onmouseover="todo_selected('task7')" 
					onmouseout="todo_unselected('task7')">项目一</div>
			</div>
			<div class="left_title2" id='finnash' 
					onmouseover="todo_selected('finnash')" 
					onmouseout="todo_unselected('finnash')">已完成</div>
			<div id='finnashes'>
				<div class="left_item" id='finished' 
					onmouseover="todo_selected('finished')" 
					onmouseout="todo_unselected('finished')">已完成</div>
				<div class="left_item" id='deleted' 
					onmouseover="todo_selected('deleted')" 
					onmouseout="todo_unselected('deleted')">垃圾箱</div>
			</div>
				
		</div>
		<div class="right">
			
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