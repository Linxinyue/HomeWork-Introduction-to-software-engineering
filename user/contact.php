<!DOCTYPE html>
<html>
<head>
	<?php include('header.php');?>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<script type="text/javascript" src="http://libs.useso.com/js/jquery/1.7.2/jquery.min.js"></script>
	<title>ToDo</title>
	<style type="text/css">
		body{
			margin: 60px 0;
			padding:0 0;
		}
		.left{
			float: left;
			width: 270px;
			padding-top: 40px;
			background-color: #DCE5E3;
			overflow: auto;
		}
		.left_item{
			width:83%;
			padding-top: 15px;
			padding-bottom: 20px;
			height: 40px;
			padding-left: 40px;
			font-size: 12pt;
		}
		.left_phpoto{
			width: 50px;
			float: left;
			clear: left;
		}
		.left_contacts{
			float: left;
			margin-top: 15px;
			margin-bottom: 15px;
			height: auto;
			margin-left: 20px;
		}
		.right{
			float: left;
			margin-left: 260px;
		}
	</style>
	<script type="text/javascript">
		var hi=innerHeight-105;
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
				<div class="left_item" id='basket' 
					onmouseover="todo_selected('basket')" 
					onmouseout="todo_unselected('basket')">
					<img class="left_phpoto" src="../image/girl.jpg"/>
					<div class="left_contacts">
						张馨闵
					</div></div>
				<div class="left_item" id='today' 
					onmouseover="todo_selected('today')" 
					onmouseout="todo_unselected('today')">
					<img class="left_phpoto" src="../image/girl.jpg"/>
					<div class="left_contacts">
						张筱萱
					</div></div>
				<div class="left_item" id='next' 
					onmouseover="todo_selected('next')" 
					onmouseout="todo_unselected('next')">
					<img class="left_phpoto" src="../image/girl.jpg"/>
					<div class="left_contacts">
						张玲菲
					</div></div>
				<div class="left_item" id='torrow' 
					onmouseover="todo_selected('torrow')" 
					onmouseout="todo_unselected('torrow')">
					<img class="left_phpoto" src="../image/girl.jpg"/>
					<div class="left_contacts">
						张莺拓
					</div></div>
				<div class="left_item" id='week' 
					onmouseover="todo_selected('week')" 
					onmouseout="todo_unselected('week')">
					<img class="left_phpoto" src="../image/girl.jpg"/>
					<div class="left_contacts">
						张琼湄
					</div></div>
					 
				<div class="left_item" id='schedule' 
					onmouseover="todo_selected('schedule')" 
					onmouseout="todo_unselected('schedule')">
					<img class="left_phpoto" src="../image/girl.jpg"/>
					<div class="left_contacts">
						张馨丹
					</div></div>
					 
				<div class="left_item" id='further' 
					onmouseover="todo_selected('further')" 
					onmouseout="todo_unselected('further')">
					<img class="left_phpoto" src="../image/girl.jpg"/>
					<div class="left_contacts">
						任务篮
					</div></div>
					 

				

				<div class="left_item" id='task1' 
					onmouseover="todo_selected('task1')" 
					onmouseout="todo_unselected('task1')">
					<img class="left_phpoto" src="../image/girl.jpg"/>
					<div class="left_contacts">
						任务篮
					</div></div>
					 
				<div class="left_item" id='task2' 
					onmouseover="todo_selected('task2')" 
					onmouseout="todo_unselected('task2')">
					<img class="left_phpoto" src="../image/girl.jpg"/>
					<div class="left_contacts">
						任务篮
					</div></div>
					 
				<div class="left_item" id='task3' 
					onmouseover="todo_selected('task3')" 
					onmouseout="todo_unselected('task3')">
					<img class="left_phpoto" src="../image/girl.jpg"/>
					<div class="left_contacts">
						任务篮
					</div></div>
					 
				<div class="left_item" id='task4' 
					onmouseover="todo_selected('task4')" 
					onmouseout="todo_unselected('task4')">
					<img class="left_phpoto" src="../image/girl.jpg"/>
					<div class="left_contacts">
						任务篮
					</div></div>
					 
				<div class="left_item" id='task5' 
					onmouseover="todo_selected('task5')" 
					onmouseout="todo_unselected('task5')">
					<img class="left_phpoto" src="../image/girl.jpg"/>
					<div class="left_contacts">
						任务篮
					</div></div>
					 
				<div class="left_item" id='task6' 
					onmouseover="todo_selected('task6')" 
					onmouseout="todo_unselected('task6')">
					<img class="left_phpoto" src="../image/girl.jpg"/>
					<div class="left_contacts">
						任务篮
					</div></div>
					 
				<div class="left_item" id='task7' 
					onmouseover="todo_selected('task7')" 
					onmouseout="todo_unselected('task7')">
					<img class="left_phpoto" src="../image/girl.jpg"/>
					<div class="left_contacts">
						任务篮
					</div></div>
					 


				<div class="left_item" id='finished' 
					onmouseover="todo_selected('finished')" 
					onmouseout="todo_unselected('finished')">
					<img class="left_phpoto" src="../image/girl.jpg"/>
					<div class="left_contacts">
						任务篮
					</div></div>
					 
				<div class="left_item" id='deleted' 
					onmouseover="todo_selected('deleted')" 
					onmouseout="todo_unselected('deleted')">
					<img class="left_phpoto" src="../image/girl.jpg"/>
					<div class="left_contacts">
						任务篮
					</div></div>
					 
				
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