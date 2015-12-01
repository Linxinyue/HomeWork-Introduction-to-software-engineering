<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/editdiary.css">
	<link rel="stylesheet" type="text/css" href="../css/fineround.css">
	<script type="text/javascript">
	function save () {
		window.history.back(-1); 
	}
	</script>
</head>
<body>
<div class="title">
	<input type="text" class="inputtitle" placeholder="Title"/>
</div>

<hr noshade class="myhr" size="1px" />	 
<div class="content">
	<textarea class="inputcontent" placeholder="Content" ></textarea>
</div>
<div class="buttondiv">
	<input class="button" type="button" value="save" onclick="save()" />
	<input class="button" type="button" value="cancel" onclick="window.history.back(-1); " />
</div>
</body>
</html>