<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="http://libs.useso.com/js/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript">
		window.onload = function(){
			$.getScript('http://www.laoshu133.com/Lab/DatePicker/jquery.DatePicker.js', function(){
				$('#date_picker_demo').datePicker({
					followOffset : [0, 24]
				})
				.focus();
			});
		}
	</script>
</head>
<body>
	<input type="text" id="date_picker_demo" value="2012-12-12">
</body>
</html>