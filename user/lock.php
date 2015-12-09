<!DOCTYPE html>
<html>
<head>
	<?php include('header.php');?>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript" src="./js/lock.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/lock.css" />
	<title>Lock</title>
</head>
<body>
	<div>
		<div class="left" id='left'>
				<div class="left_item" id='basket'>
					<div class="left_lock" title="./lock/baselock.php">
						常用密码
					</div>
				</div>
				<div class="left_item" id='today'>
					<div class="left_lock" title="./lock/baselock.php">
						全部密码
					</div>
				</div>
		</div>
		<div id="right" style="padding-top:2px;">
		</div>
		<script type="text/javascript">
			document.getElementById('left').style.maxHeight=hi+"px";
			document.getElementById('left').style.height=hi+"px";
		</script>
	</div>
</body>
</html>