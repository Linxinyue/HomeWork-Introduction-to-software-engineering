<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>
<head>
	<title></title>
	<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
	<script>
			$(document).ready(function(){
				$("#img2").hide();
				$("#img3").hide();
				$("#img4").hide();
				myFade();
				setInterval('myFade()',28000);
			});
			function myFade(){
				$("#img1").fadeOut(5000);
				$("#img2").fadeIn(5000);
				setTimeout("$('#img2').fadeOut(5000);",7000);
				setTimeout("$('#img3').fadeIn(5000);",7000);
				setTimeout("$('#img3').fadeOut(5000);",14000);
				setTimeout("$('#img4').fadeIn(5000);",14000);
				setTimeout("$('#img4').fadeOut(5000);",21000);
				setTimeout("$('#img1').fadeIn(5000);",21000);
			}
		</script>
		<style type="text/css">
			body{
				padding:0 0;
				margin:0 0;
			}
			#img4,#img3,#img2,#img1{
				position:absolute;
				width:100%; 
				height:70%; 
				left:0px; 
				top:65px;
			}
			.main_div{
				width:100%;
				height:70%;
			}
			.bottom_div{
				margin-top: 39%;
				width: 98%;
				height: 200px;
				padding-left: 1%;
				padding-right: 1%;
			}
			.news{
				width: 65%;
				height: 200px;
				background-color: gray;
				float: left;
				text-align: center;
				overflow: hidden;
			}
			
			.function{
				height: 150px;
				margin-top: 25px;
				margin-left: 5%;
				margin-right: 5%;
			}
			.login{
				width: 34%;
				padding-top: 80px;
				height: 120px;
				background-color: #3172D4;
				float: right;
				text-align: center;
				font-size: 27pt;
			}
		</style>
</head>
<body>
	
	<div class="main_div">
		<img id='img1' src="./image/demo1.jpg">
		<img id='img2' src="./image/demo2.jpg">
		<img id='img3' src="./image/demo3.jpg">
		<img id='img4' src="./image/demo4.jpg">
	</div>
	<div class="bottom_div">
		<div class="news">
			<img class='function' src="./image/fun1.png">
			<img class='function' src="./image/fun2.png">
			<img class='function' src="./image/fun3.png">
			<img class='function' src="./image/fun4.png">
		</div>
		<div class="login">
			Login&Registered
		</div>
	</div>
	<?php
		include('header.html');
	?>
	<?php 
		include('footer.html');
	?>
</body>
</html>