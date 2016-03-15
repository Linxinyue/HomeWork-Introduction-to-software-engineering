<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>

	<style type="text/css">
		body{
			padding:0 0;
			margin:0 0; 
		}
		.main_time{
			margin-bottom: 80px;
		}
		.time_line{
			/*border-radius:5px;*/
			overflow: hidden;
			width: auto;
			margin-left: 10%;
			margin-right: 10%;
			margin-top: 30px;
			padding: 10px 30px 50px 30px;
			background-color: #EBEDF2;
			box-shadow:2px 2px 10px #909090;
		}
		.time{
			width: 100px;
			height: 100px;
			float: left;
		}
		.time_pic{
			position: absolute;
			width: 100px;
			float: left;
			z-index:2;
		}
		.time_text{
			width: 70px;
			text-align: center;
			position: absolute;
			margin-left: 17px;
			margin-top: 20px;
			padding: 5px 5px;
			font-size: 37pt;
			background-color: #F9B24F;

			box-shadow:2px 2px 10px #909090;
		}
		.time_year{
			position: absolute;
			margin-left: 35px;
			margin-top: 105px;
			font-size: 14pt;
		}
		.hr_time{
			size:1px;
			margin-top: 30px;
			margin-left: 120px;

		}
		.time_content{
			width: 80%;
			margin-top: 20px;
			margin-left: 130px;
		}
	</style>
</head>
<body>
	<br /><br /><br />
	<div class= "main_time">
		<div class="time_line">
		<div class="time">
			<div class="time_text">10</div>
			<!-- <div class="time_pic"><img class='time_pic' src="./image/circle.png"></div>
			 -->
			 <div class="time_year">2015</div>
		</div>
		<hr class='hr_time' noshade="noshade" size="1px"/>
		<div class="time_content">
			参考网上资料完成了详细设计报告。</div>
		
	</div>
	<div class="time_line">
		<div class="time">
			<div class="time_text">9</div>
			<!-- <div class="time_pic"><img class='time_pic' src="./image/circle.png"></div>
			 --><div class="time_year">2015</div>
		</div>
		<hr class='hr_time' noshade="noshade" size="1px"/>

		<div class="time_content">
			头脑风暴完成了概要设计报告。</div>
	</div>
	<div class="time_line">
		<div class="time">
			<div class="time_text">9</div>
			<!-- <div class="time_pic"><img class='time_pic' src="./image/circle.png"></div>
			 --><div class="time_year">2015</div>
		</div>
		<hr class='hr_time' noshade="noshade" size="1px"/>

		<div class="time_content">
			通过调查研究完成了项目需求报告。</div>
	</div>
	<div class="time_line">
		<div class="time">
			<div class="time_text">9</div>
			<!-- <div class="time_pic"><img class='time_pic' src="./image/circle.png"></div>
			 --><div class="time_year">2015</div>
		</div>
		<hr class='hr_time' noshade="noshade" size="1px"/>

		<div class="time_content">
			参考知乎上一个大牛的回答，头脑风暴开始有了初始的系统模型。</div>
	</div>
	<div class="time_line">
		<div class="time">
			<div class="time_text">9</div>
			<!-- <div class="time_pic"><img class='time_pic' src="./image/circle.png"></div>
			 --><div class="time_year">2015</div>
		</div>
		<hr class='hr_time' noshade="noshade" size="1px"/>

		<div class="time_content">
			对项目进行可行性进行分析，完成了可行性研究报告。</div>
	</div>


	</div>
	

	<?php
		include("./header2.html");
		include("./footer.html");
	?>


</body>
</html>