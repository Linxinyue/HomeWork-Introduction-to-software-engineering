<!DOCTYPE html>
<html>
<head>
	<?php include('header.php');?>

	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<script type="text/javascript" src="http://libs.useso.com/js/jquery/1.7.2/jquery.min.js"></script>
	<title>ToDo</title>
	<style type="text/css">
		body{
			margin: 60px 0;
			padding:0 0;
		}
		.left{
			float: left;
			width: 200px;
			padding-top: 40px;
			background-color: #DCE5E3;
			overflow: auto;
		}
		.left_item{
			width:170px;
			padding-top: 15px;
			padding-bottom: 20px;
			height: 30px;
			padding-left: 30px;
			font-size: 12pt;
		}
		.left_tools{
			float: left;
			margin-top: 5px;
			margin-bottom: 15px;
			margin-left: 20px;
		}
		.right{
			float: left;
			overflow: hidden;
		}
		#count{
			display: none;
		}
	</style>
	<script type="text/javascript">
		var hi=innerHeight-105;
		var wid=innerWidth-205;
		function tools_selected(selecetedid) {
			document.getElementById(selecetedid).style.background='#BACAC1';
		}
		function tools_unselected(selecetedid) {
			document.getElementById(selecetedid).style.background='#DCE5E3';
		}
		function showcolor(){
			$("#count").hide();
			$("#color").show();
		}
		function showcount(){
			$("#color").hide();
			$("#count").show();
		}
	</script>
</head>
<body style="overflow-y:hidden;overflow-x:hidden;">
	<div>
		<div class="left" id='left'>
				<div class="left_item" id='basket' 
					onclick="showcolor()" 
					onmouseover="tools_selected('basket')" 
					onmouseout="tools_unselected('basket')">
					<div class="left_tools" id="getcolor">
						取色
					</div>
				</div>
				<div class="left_item" id='today' 
					onclick="showcount()"
					onmouseover="tools_selected('today')" 
					onmouseout="tools_unselected('today')">
					<div class="left_tools" id="getcount" >
						倒计时
					</div>
				</div>
		</div>
		<div class="right" id="right">
			<!-- <iframe id="color" src="http://www.colorspire.com/rgb-color-wheel/"
				 width="100%" height="100%" frameborder="0" scrolling="no"></iframe> -->
			<iframe id="color" style="margin-top: -75px;margin-left: 40px" width="800px" 
			 height="780px"  src="http://www.colorspire.com/rgb-color-wheel/" frameborder="0" scrolling="no" >
				<!--  src="http://www.colorspire.com/rgb-color-wheel/" -->
			</iframe>
			<iframe id="count" src="./tools/index.html"
				 width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
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

<?php 
	//include('../footer.html');
?>