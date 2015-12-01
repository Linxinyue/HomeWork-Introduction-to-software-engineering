<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<title></title>
	<script type="text/javascript" src="http://libs.useso.com/js/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		  $(".contrl").click(function(){
		    $(".list").slideToggle("slow");
		  });
		});
		function selected(){
			document.getElementsByName('contrl')[0].style.background='red';
			
		}
	</script>
	<style type="text/css">
		.contrl{
			width: 200px;
			padding-bottom: 5px;
			padding-top: 5px;
			height: auto;
			background-color: gray;
			padding-left: 50px;
		}
		.list div{
			width: 200px;
			padding-top: 8px;
			padding-bottom: 8px;
			height: auto;
			background-color: yellow;
			border: 1px solid black;
			padding-left: 80px;
		}
	</style>
</head>
<body>
<div class="contrl" id='contrl' onmouseover="selected()">zhidie</div>
<div class='list'>
	<div>list1</div>
	<div>list2</div>
	<div>list3</div>
	<div>list4</div>
	<div>list5</div>
</div>
</body>
</html>