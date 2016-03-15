<!DOCTYPE html>
<html>
<head>
	<?php include('header.php');?>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript" src="./js/ppf.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/ppf.css" />
	<title>PPF</title>
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
				<div class="left_ppf" title="./ppf/moreinfo.php">
					详细资料
				</div>
			</div>
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