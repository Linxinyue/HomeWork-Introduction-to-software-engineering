<!DOCTYPE html>
<html>
<head>
	<?php include('header.php');?>

	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript" src="./js/tools.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/tools.css" />
	<title>Tools</title>
</head>
<body style="overflow-y:hidden;overflow-x:hidden;">
	<div>
		<div class="left" id='left'>
				<div class="left_item" id='basket' 
					onclick="showcount()">
					<div class="lefttools" id="getcount">
						倒计时
					</div>
				</div>
				<div class="left_item" id='today' 
					onclick="showcolor()">
					<div class="lefttools" id="getcolor" >
						取色
					</div>
				</div>
		</div>
		<div class="right" id="right">
			<iframe id="count" src="./tools/index.html"
				 width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
			<iframe id="color" style="margin-top: -75px;margin-left: 40px" width="800px" 
			 height="780px"  src="http://www.colorspire.com/rgb-color-wheel/" frameborder="0" scrolling="no" >
			</iframe>
			
		</div>
		<script type="text/javascript">
			document.getElementById('left').style.maxHeight=hi+"px";
			document.getElementById('left').style.height=hi+"px";
			document.getElementById('right').style.maxHeight=hi+"px";
			document.getElementById('right').style.height=hi+"px";
			document.getElementById('right').style.maxWidth=wid+"px";
			document.getElementById('right').style.width=wid+"px";
		</script>
	</div>
</body>
</html>