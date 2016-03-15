<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="./style/usual.css" />
		<link rel="stylesheet" type="text/css" href="./style/index.css" />
        <script type="text/javascript" src="http://libs.useso.com/js/jquery/1.7.2/jquery.min.js"></script>
        
		<script type="text/javascript">
			var hi=window.screen.height;
		</script>
	</head>
	<body >
		<div>

			
			<div id="window1" class="split_div">
				<p>ToDo、日记本、记账本、密码本……<br/><br/>这么多工具谁玩的转</p>
			</div>
			<div id="window2" class="split_div">
				<p>这个界面，那个界面<br/><br/>为什么就是不能统一到一个界面</p>
			</div>
			<div id="window3" class="split_div">
				<p>是时候做出点改变了</p>
			</div>
			<div id="window4" class="split_div">
				<p>SPM：一站掌握所有，从心开始！</p>
			</div>
			
			<div class="main_div" id="window5">
				<p class="title">SPM</p>
				<br/>
				<p class="first_graph">
				个人事务管理系统是基于便捷的互联网平台的，能够方便的记录保存用户所有的信息。
				方便用户进行合理规划时间安排，并且具有查询更改方便、信息可靠、保存时间久等优势。
				<br/>
				该系统应该具有对数据信息、个人信息、相关资料进行存储和管理的能力。
				该系统能极大地减了用户的日常工作量，并能准确的计算、查找所需数据，提升用户体验。
				</p>

			</div>
			
			
		</div>
	</body>
	<script>
		document.getElementById("window1").style.height=hi+"px";
		document.getElementById("window2").style.height=hi+"px";
		document.getElementById("window3").style.height=hi+"px";
		document.getElementById("window4").style.height=hi+"px";
	</script>
	<?php 
		include('./header2.html');
		include('./footer.html');
	?>
</html>