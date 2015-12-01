<!DOCTYPE html>
<html>
<head>
	<?php include('header.php');?>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<script type="text/javascript" src="http://libs.useso.com/js/jquery/1.7.2/jquery.min.js"></script>
	
	<title>ToDo</title>
	<style type="text/css">
		body{
			margin: 60px 0px;
			padding:0px 0px;
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
			padding-bottom: 10px;
			height: 50px;
			padding-left: 30px;
			font-size: 12pt;
		}
		.left_ppf{
			float: left;
			margin-top: 10px;
			margin-bottom: 10px;
			margin-left: 20px;
			font-size: 12pt;
		}
		.right{
			float: left;
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
	　　$.get("./ppf/baseinformation.php",function(data){ //初始將a.html include div#iframe
	　　　　$("#right").html(data);
	　　});
		$(function(){
		　　$('.left_item').click(function() {
		  　　// 找出 li 中的超链接 href(#id)
		 　　　　var $this = $(this);
		 　　　　_clickTab = $this.find('div').attr('title'); // 找到链接a中的targer的值
		 　　　　$.get(_clickTab,function(data){
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
					<div class="left_ppf" title="./ppf/baseinformation.php" >
						基本资料
					</div>
				</div>
				<div class="left_item" id='today' 
					onmouseover="todo_selected('today')" 
					onmouseout="todo_unselected('today')">
					<div class="left_ppf" title="./ppf/datailinfomation.php">
						详细资料
					</div>
				</div>
				<!-- <div class="left_item" id='today1' 
					onmouseover="todo_selected('today1')" 
					onmouseout="todo_unselected('today1')">
					<div class="left_ppf" title="./ppf/main2.php">
						兴趣爱好
					</div>
				</div>
				<div class="left_item" id='today2' 
					onmouseover="todo_selected('today2')" 
					onmouseout="todo_unselected('today2')">
					<div class="left_ppf" title="./ppf/main3.php">
						教育背景
					</div>
				</div>
				<div class="left_item" id='today3' 
					onmouseover="todo_selected('today3')" 
					onmouseout="todo_unselected('today3')">
					<div class="left_ppf" title="./ppf/main4.php">
						工作信息
					</div>
				</div>
				<div class="left_item" id='today4' 
					onmouseover="todo_selected('today4')" 
					onmouseout="todo_unselected('today4')">
					<div class="left_ppf" title="./ppf/main5.php">
						头像设置
					</div>
				</div> -->
		</div>
		<div class="right" id='right'></div>
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