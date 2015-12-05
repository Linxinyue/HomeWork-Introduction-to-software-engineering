<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./css/yahei.css" />
	<link rel="stylesheet" type="text/css" href="./css/singlecontact.css" />
	<script type="text/javascript" src="./js/singlecontact.js"></script>
</head>
<body>
<div class="information">
	<div class="photo">
		<img src="./img/girl.jpg" class="photo" />
	</div>
	<div class="name" id="newname">
		<input type="text" placeholder="姓名" class="inputname" />
	</div>
	<div class="phone">
		<div class="phonedec">
			电话
		</div>
		<div class="phoneconent" id="newphone">
			<input type="text" placeholder="电话" class="inputphone" />
		</div>
	</div>
	<div class="company">
		<div class="phonedec">
			公司
		</div>
		<div class="phoneconent" id="newcompany">
			<input type="text" placeholder="公司或标签" class="inputphone" value="" />
		</div>
	</div>
	<div class="note">
		备注
	</div>
	<div class="notecontent" id="newnote">
		<textarea class="inputnote" placeholder="备注"></textarea>
	</div>

	<div class="tools">
		<div class="editcontact" id="chatools" onclick="newcontact()">添加</div>
	</div>
</div>

</body>
</html>