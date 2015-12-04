<!DOCTYPE html>
<html>
<head>
	<?php include('header.php');?>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<script type="text/javascript" src="http://libs.useso.com/js/jquery/1.7.2/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/contact.css" />
	<script type="text/javascript" src="./js/contact.js"></script>
	<title>ToDo</title>

</head>
<body>
	<div>
		<div class="left" id='left'>
				<div class="left_item" id='basket' 
					onmouseover="todo_selected('basket')" 
					onmouseout="todo_unselected('basket')">
					<img class="left_phpoto" src="../image/girl.jpg"/>
					<div class="left_contacts" title="./contact/singlecontact.php">
						张馨闵
					</div></div>
				<div class="left_item" id='today' 
					onmouseover="todo_selected('today')" 
					onmouseout="todo_unselected('today')">
					<img class="left_phpoto" src="../image/girl.jpg"/>
					<div class="left_contacts" title="./contact/singlecontact.php"> 
						张筱萱
					</div></div>
				<div class="left_item" id='next' 
					onmouseover="todo_selected('next')" 
					onmouseout="todo_unselected('next')">
					<img class="left_phpoto" src="../image/girl.jpg"/>
					<div class="left_contacts" title="./contact/singlecontact.php">
						张玲菲
					</div></div>
				<div class="left_item" id='torrow' 
					onmouseover="todo_selected('torrow')" 
					onmouseout="todo_unselected('torrow')">
					<img class="left_phpoto" src="../image/girl.jpg"/>
					<div class="left_contacts" title="./contact/singlecontact.php">
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
	//include('../footer.html');
?>