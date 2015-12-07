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
			width: 200px;
			padding-top: 40px;
			background-color: #DCE5E3;
			overflow: auto;
		}
		.left_item{
			width:170px;
			padding-top: 15px;
			padding-bottom: 20px;
			height: 30px;
			padding-left: 30px;
			font-size: 12pt;
		}
		.left_lock{
			float: left;
			margin-top: 5px;
			margin-bottom: 15px;
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
	<script type="text/javascript">
	$(document).ready(function(){ 
	　　$.get("./lock/baselock.php",function(data){ //初始將a.html include div#iframe
	　　　　$("#right").html(data);
	　　});
		$(function(){
		　　$('.left_item').click(function() {
		  　　// 找出 li 中的超链接 href(#id)
		 　　　　var $this = $(this);
		 　　　　clickTab = $this.find('div').attr('title'); // 找到链接a中的targer的值
		 　　　　$.get(clickTab,function(data){
		 　　　　　　$("#right").html(data); 
		 　　　　});
		　　　});
		});
	});
	</script>
</head>
<body>
	<div>
		<div class="left" id='left'>
				<div class="left_item" id='basket' 
					onmouseover="todo_selected('basket')" 
					onmouseout="todo_unselected('basket')">
					<div class="left_lock" title="./lock/baselock.php">
						常用密码
					</div>
				</div>
				<div class="left_item" id='today' 
					onmouseover="todo_selected('today')" 
					onmouseout="todo_unselected('today')">
					<div class="left_lock" title="./lock/baselock.php">
						全部密码
					</div>
				</div>
				<!-- <div class="left_item" id='tomorrw' 
					onmouseover="todo_selected('tomorrw')" 
					onmouseout="todo_unselected('tomorrw')">
					<div class="left_lock">
						临时类
					</div>
				</div>
				<div class="left_item" id='tomorrw1' 
					onmouseover="todo_selected('tomorrw1')" 
					onmouseout="todo_unselected('tomorrw1')">
					<div class="left_lock">
						工作类
					</div>
				</div>
				<div class="left_item" id='tomorrw2' 
					onmouseover="todo_selected('tomorrw2')" 
					onmouseout="todo_unselected('tomorrw2')">
					<div class="left_lock">
						常用类
					</div>
				</div>
				<div class="left_item" id='tomorrw3' 
					onmouseover="todo_selected('tomorrw3')" 
					onmouseout="todo_unselected('tomorrw3')">
					<div class="left_lock">
						隐私类
					</div>
				</div> -->
					 
				
		</div>
		<div id="right" style="padding-top:2px;">
			
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