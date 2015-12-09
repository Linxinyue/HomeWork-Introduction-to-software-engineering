
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="./css/yahei.css" />
	<style type="text/css">
		a{
			text-decoration: none;
		}
		body{
			font-family: yahei;
		}
		.header{
			position: fixed;
			left: 0px;
			top: 0px;
			height: 60px;
			width:100%;
			background-color: #2EB7F2;
			padding-bottom:2px;
			text-align: center;
			box-shadow:0px 2px 10px #909090;
		}
		.main_icon{
			width: 55px;
			float: left;
			margin-top: 3px;
			margin-right: 40px;
			margin-left: 70px;
			border: 0;
		}
		.top_button{
			float: left;
			height: 62px;
			width: 130px;
		}
		.inner_top{
			font-size: 13pt;
			margin-top: 20px;
			margin-bottom: 23px;
			height: auto;
		}
		.header_right{
			margin-top:20px;
			margin-bottom:20px;
			margin-right: 50px;
			height: auto;
			float: right;
			text-align: center;
			font-size: 12pt;
			color: #E9E060;
		}
		@media screen and (max-width: 1500px) {
          	.top_button{
				float: left;
				height: 62px;
				width: 90px;
			}
        }
	</style>
	<script type="text/javascript">
		function selected (idstr) {
			document.getElementById(idstr).style.background='#2E69F2';
		}
		function unselected (idstr) {
			document.getElementById(idstr).style.background='#2EB7F2';
		}
	</script>

	<div class="header">
		<div class="top_main">	
			<a href="../index.php">
				<img class='main_icon' src="../image/icon.png" />
			</a>
			
			<a href="./index.php">
				<div class="top_button" 
				id='todo' onmouseover="selected('todo')" onmouseout="unselected('todo')">
				<div class='inner_top'>ToDo</div>
				</div>
			</a>
			<a href="./contact.php">
				<div class="top_button"
				id='people' onmouseover="selected('people')" onmouseout="unselected('people')">
				<div class='inner_top'>联系人</div>
				</div>
			</a>
			<a href="./daliy.php">
				<div class="top_button"
				id='daliy' onmouseover="selected('daliy')" onmouseout="unselected('daliy')">
				<div class='inner_top'>日记本</div>
				</div>
			</a>
			<!-- <a href="./daliycost.php">
				<div class="top_button"
				id='list' onmouseover="selected('list')" onmouseout="unselected('list')">
				<div class='inner_top'>记账</div>
				</div>
			</a> -->
			<a href="./ppf.php">
				<div class="top_button"
				id='me' onmouseover="selected('me')" onmouseout="unselected('me')">
				<div class='inner_top'>个人资料</div>
				</div>
			</a>
			<a href="./lock.php">
				<div class="top_button"
				id='lock' onmouseover="selected('lock')" onmouseout="unselected('lock')">
				<div class='inner_top'>密码箱</div>
				</div>
			</a>
			<a href="./tools.php">
				<div class="top_button"
				id='tools' onmouseover="selected('tools')" onmouseout="unselected('tools')">
				<div class='inner_top'>小工具</div>
				</div>
			</a>
			
			
		</div>
		<div class="header_right">
			<?php session_start();
				echo 'Hi,'.$_SESSION['user'].'你好！'; ?>
				<a href="logout.php" style="font-size:10pt;">退出系统</a>
		</div>
	</div>
