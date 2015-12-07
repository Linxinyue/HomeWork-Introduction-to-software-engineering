<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript">
		window.onload = function(){
			$.getScript('./js/jquery.DatePicker.js', function(){
				$('#date_picker_demo').datePicker({
					followOffset : [0, 24]
				});
			});
		}
	</script>
</head>
<body>
	<input type="text" id="date_picker_demo" value="2012-12-12">
</body>
</html>