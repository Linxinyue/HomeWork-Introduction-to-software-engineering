<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$.get("./contact/newcontact.php", function(data,status){
				// alert("数据：" + data + "\n状态：" + status);
				//$("#right").html(data); 
			});
		});
	</script>
	<script type="text/javascript">
		$(function(){
			$.get("./contact/newcontact.php", function(data,status){
				// alert("数据：" + data + "\n状态：" + status);
				//$("#right").html(data); 
			});
			$('.left_item').click(function() {
				var $this = $(this);
				clickTab = $this.attr('title'); 
				// alert(clickTab);
				$.get(clickTab, function(data,status){
					// alert("数据：" + data + "\n状态：" + status);
					$("#right").html(data); 
				});
			});

		});
	</script>
	<style type="text/css">
		.left_item{
			width: 300px;
			height: 100px;
			background-color: green;
		}
		#right{
			width: 300px;
			height: 100px;
			background-color: green;
		}
	</style>
</head>
<body>
	<div class="left_item" id="right1" title="./contact/newcontact.php">2334432432</div>
	<div id="right">
		11111111111111111111111111111
	</div>
</body>
</html>