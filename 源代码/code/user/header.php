
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="./css/yahei.css" />
<link rel="stylesheet" type="text/css" href="./css/header.css" />
<script type="text/javascript" src="./js/header.js"></script>
<script type="text/javascript" src="./js/jquery.min.js"></script>
<?php session_start();  ?>
	<div class="header">
		<div class="top_main">	
				
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
			<div class="headername" onclick="showchoose()"><img class='main_icon' src="./img/girl.jpg" /></div>
			<div class="logout" id="chooose"><a href="logout.php" style="font-size:10pt;">退出系统</a></div>
		</div>
	</div>
