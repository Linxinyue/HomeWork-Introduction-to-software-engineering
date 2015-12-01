<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name='renderer' content='webkit' />
<meta name="renderer" content="blink|webkit|ie-comp|ie-stand" />
<meta name='renderer' content='blink' />
<html>
<head>
	<title>SPM</title>
	<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
		<style type="text/css">
			body{
				padding:0 0;
				margin:0 0;
			}
			#img2,#img1{
				position:absolute;
				width:100%; 
				height:100%; 
				left:0px; 
				top: 0px;
			}
			
			.bottom_div{
				margin-top: 660px;
				width: 98%;
				height: 200px;
				padding-left: 1%;
				padding-right: 1%;
			}

			.news{
				width: 65%;
				height: 200px;
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
			.unkonw{
				width: 34%;
				padding-top: 80px;
				height: 120px;
				background:#897CDB;
				float: right;
				text-align: center;
				font-size: 27pt;
			}
			.new_login{
				display:none;
				position: absolute;
				width: 260px;
				height: 180px;
				top:300px;
				color: white;
				text-align: center;
			}
			.new_reg{
				padding-top: 10px;
				padding-bottom: 10px;
				position: absolute;
				width: 100px;
				top:500px;
				left: 80px;
				font-size: 13pt;
				background: rgba(255,255,255, 0.2);
				color: white;
				text-align: center;
			}
			#div_input_user{
				margin-top: 20px;
			}
			#div_input_submit{
				margin-bottom: 10px;
			}
			#forget_pwd{
				font-size: 10pt;
				color: #A2AC9C;
			}
			#div_input_repwd{
				display: none;
			}
			@media screen and (min-width: 1500px) {
				/*.bottom_div{
					margin-top: 51%;
					width: 98%;
					height: 200px;
					padding-left: 1%;
					padding-right: 1%;
				}*/
				.new_reg{
					top:700px;
				}
            }
            
		</style>

		<style>
			.input_text{
				border-radius:3px;
				margin-top: 1px;
				height:40px;
				width:230px;
				font-size:15pt;
				border:0.2px solid gray;
				background: rgba(255,255,255, 0.4);
			}
			.input_button_submmit{
				border-radius:3px;
				border:0px;
				background:#897CDB;
				height:40px;
				width:230px;
				font-size:13pt;
				color:white;
				margin-top: 10px;
				font-weight:bold;
			}
			
	</style>
	<style type="text/css">
		@-webkit-keyframes fadeInOut {
		    0% {
		        opacity:1;
		    }
		    25% {
		        opacity:0;
		    }
		    50% {
		        opacity: 0;    
		    }
		    75% {
		        opacity:1;
		    }
		}
		.main_img {
		    -webkit-animation-name: fadeInOut;
		    -webkit-animation-timing-function: ease-in-out;
		    -webkit-animation-iteration-count: infinite;
		    -webkit-animation-duration: 10s;
		    -webkit-animation-direction: alternate;
		}
	</style>
	<script type="text/javascript">
		var wi=innerWidth-280;
	</script>
	<script>
		function indexselected(idstr){
			document.getElementById(idstr).style.background='#0033FF';
		}
		function indexunselected(idstr){
			document.getElementById(idstr).style.background='#897CDB';
		}
		function changeSrc(is_over,idstr){
			if(is_over=='over'){
				var img=document.getElementById(idstr)
				switch (idstr){
					case 'fun1':
						img.src="./image/gif/girl.gif"
						break;
					case 'fun2':
						img.src="./image/gif/run.gif"
						break;
					case 'fun3':
						img.src="./image/gif/xiaohei.gif"
						break;
					case 'fun4':
						img.src="./image/gif/lufei.gif"
						break;
				}
			}else{
				var img=document.getElementById(idstr)
				switch (idstr){
					case 'fun1':
						img.src="./image/fun1.jpg"
						break;
					case 'fun2':
						img.src="./image/fun2.jpg"
						break;
					case 'fun3':
						img.src="./image/fun3.jpg"
						break;
					case 'fun4':
						img.src="./image/fun4.jpg"
						break;
				}
			}
			
			
		}
		function checkLoginForm() {
			var login_or_reg=document.getElementById("login_button").value;
			var un = document.getElementById("username");
			var pw = document.getElementById("password");
			if(login_or_reg=='注册'){
				var repw=document.getElementById("password2");
				if(un.value == "" || pw.value == "") {
			        alert("用户名或密码不能为空!");
			        return false;
			    }else if(pw.value!=repw.value){
			    	alert("两次输入密码不一致！！");
			    	return false;
			    }
			}else{
			    if(un.value == "" || pw.value == "") {
			        alert("用户名或密码不能为空");
			        return false;
			    }
			}
		    
		}

	</script>
</head>
<body>
	<div class="main_div" >
		<img id='img1'  src="./image/demo1.jpg">
		<img id='img2' class="main_img"  src="./image/demo2.jpg">
	</div>
	<!--<div class="bottom_div">
		<div class="news">
			<img class='function' id='fun1' onmouseover="changeSrc('over','fun1')" onmouseout="changeSrc('out','fun1')" src="./image/fun1.jpg">
			<img class='function' id='fun2' onmouseover="changeSrc('over','fun2')" onmouseout="changeSrc('out','fun2')" src="./image/fun2.jpg">
			<img class='function' id='fun3' onmouseover="changeSrc('over','fun3')" onmouseout="changeSrc('out','fun3')" src="./image/fun3.jpg">
			<img class='function' id='fun4' onmouseover="changeSrc('over','fun4')" onmouseout="changeSrc('out','fun4')" src="./image/fun4.jpg">
		</div>
		<div class="unkonw" id='login_div' 
		 onmouseover="indexselected('login_div')" onmouseout="indexunselected('login_div')">
			未知
		</div>
	</div>-->
	<div class="new_login" id="new_login">
		<div id='to_decover'>探索&发现</div>
			 <form action='./user/logincheck.php' method='post' onsubmit='return checkLoginForm()'> 
				 <div id='div_input_user'>
				 <input type='text' placeholder='  用户名' id='username' name='username' class='input_text' />
				 </div>
				 <div id="div_input_pwd">
				 	<input type='password' placeholder='  密码' id='password' name='password' class='input_text' /> 
				 </div>
				 <div id="div_input_repwd">
				 	<input type='password' placeholder='  确认密码' id='password2' name='repassword' class='input_text' /> 
				 </div>
				 <div id="div_input_submit">
				 	 <input type='submit' id='login_button' name='submit' value='登录' class='input_button_submmit' 
				 		onmouseover="indexselected('login_button')" onmouseout="indexunselected('login_button')"/>
				 </div>
			</form>
			<div id='forget_pwd'>忘记密码了</div>
	</div>
	<div class="new_reg" id="new_reg" 
		onclick="register_now()" onmouseover="on_register()" onmouseout="out_register()">
		注 册
	</div>
	<?php
		include('header.html');
		//include('footer.html');
	?>
	<script type="text/javascript">
			document.getElementById('new_login').style.left=wi/2+"px";
			document.getElementById('new_login').style.display='block';
	</script>
	<script> 
		$(document).ready(function(){
			$("#new_login").animate({opacity:'0.2'},1);
			$("#div_input_pwd").animate({height:'toggle'},1);
			$("#div_input_user").animate({height:'toggle'},1);
			$("#div_input_submit").animate({height:'toggle'},1);
			$("#forget_pwd").animate({height:'toggle'},1);
			$("#new_reg").animate({opacity:'0'},1);

		    $("#new_login").animate({top:'180px',opacity:'1'},1000);
		    $("#new_reg").animate({opacity:'0.5'},1000);
		    
		    setTimeout(function (){$("#div_input_user").animate({height:'toggle'},500);},1000);
		    setTimeout(function (){$("#div_input_pwd").animate({height:'toggle'},500);},1500);
		    setTimeout(function (){$("#div_input_submit").animate({height:'toggle'},500);},2000);
		    setTimeout(function (){$("#forget_pwd").animate({height:'toggle'},500);},2000);

		    //document.getElementById('img2').src='./image/demo3.jpg';
			
		    
		});
		setInterval('change_path()',30000);
		function change_path(){
			var number=Math.floor(Math.random()*4)+1;
			document.getElementById('img1').src='./image/demo'+number+'.jpg';
			//alert(number);
		}
		function register_now(){
			alert('内测阶段，暂时不接受注册！请使用\n账户：123\n密码：123\n登陆使用！谢谢您的配合！');
			document.getElementById("username").value='123';
			document.getElementById("password").value='123';
		    /*$("#div_input_repwd").slideToggle();
		    if(document.getElementById("login_button").value=='注册'){
		    	document.getElementById("login_button").value='登录';
		    	document.getElementById("new_reg").innerHTML='注册';
		    }
		    else{
		    	document.getElementById("login_button").value='注册';
		    	document.getElementById("new_reg").innerHTML='登录';
		    }*/
		    
		}
		function on_register(){
			$("#new_reg").animate({opacity:'1'},50);
		}
		function out_register(){
		    $("#new_reg").animate({opacity:'0.5'},50);
		}
	</script> 
</body>
</html>