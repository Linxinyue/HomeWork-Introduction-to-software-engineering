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
			width: 380px;
			padding-top: 40px;
			background-color: #DCE5E3;
			overflow: auto;
		}
		.left_item{
			width:310;
			padding-top: 15px;
			padding-bottom: 20px;
			height: 200px;
			padding-left: 40px;
		}
		.left_phpoto{
			width: 150px;
			height: 200px;
			float: left;
			clear: left;
		}
		.left_book_title{
			float: left;
			margin-top: 15px;
			font-size: 14pt;
			margin-left: 20px;
		}
		.left_book_dec{
			margin-top: 47px;
			margin-left: 164px;
			font-size: 9pt;
			color: #6F6969;
		}
		.left_book_date{
			margin-top: 25px;
			margin-left: 164px;
			font-size: 9pt;
			color: gray;
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
	　　$.get("./day/diary.php",function(data){ //初始將a.html include div#iframe
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
					<img class="left_phpoto" src="../image/daliypic.jpg"/>
					<div class="left_book_title" title="./day/diary.php?name=1">
						笔记本名称
					</div>
				</div>
				<div class="left_item" id='today' 
					onmouseover="todo_selected('today')" 
					onmouseout="todo_unselected('today')">
					<img class="left_phpoto" src="../image/daliypic.jpg"/>
					<div class="left_book_title" title="./day/diary.php?name=2">
						张筱萱
					</div>
					<div class="left_book_dec">
						描述火狐，傲游，浏览器通用描述火狐，傲游，浏览器通用描述火狐，傲游，浏览器通用
					</div>
					<div class="left_book_date">
						创建日期：<br/>2015年9月25日22:50:34<br/>
						最近修改：<br/>2015年9月25日22:50:53	
					</div>
				</div>
				<!-- <div class="left_item" id='next' 
					onmouseover="todo_selected('next')" 
					onmouseout="todo_unselected('next')">
					<img class="left_phpoto" src="../image/daliypic.jpg"/>
					<div class="left_book_title">
						张玲菲
					</div></div>
				<div class="left_item" id='torrow' 
					onmouseover="todo_selected('torrow')" 
					onmouseout="todo_unselected('torrow')">
					<img class="left_phpoto" src="../image/daliypic.jpg"/>
					<div class="left_book_title">
						张莺拓
					</div></div>
				<div class="left_item" id='week' 
					onmouseover="todo_selected('week')" 
					onmouseout="todo_unselected('week')">
					<img class="left_phpoto" src="../image/daliypic.jpg"/>
					<div class="left_book_title">
						张琼湄
					</div></div>
					 
				<div class="left_item" id='schedule' 
					onmouseover="todo_selected('schedule')" 
					onmouseout="todo_unselected('schedule')">
					<img class="left_phpoto" src="../image/daliypic.jpg"/>
					<div class="left_book_title">
						张馨丹
					</div></div> -->
					 
		</div>
		<div class="right" id="right">
			
		</div>
		<script type="text/javascript">
			document.getElementById('left').style.maxHeight=hi+"px";
			document.getElementById('left').style.height=hi+"px";
		</script>
	</div>
</body>
</html>

<?php 
	//include('../footer.html')
?>