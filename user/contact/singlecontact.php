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
	<div class="name">
		新月
	</div>
	<div class="phone">
		<div class="phonedec">
			电话
		</div>
		<div class="phoneconent" id="phonecontent">15000791737</div>
		<div class="phoneconent" id="inputphone">
			<input type="text" placeholder="电话" class="inputphone" />
		</div>
	</div>
	<div class="company">
		<div class="phonedec">
			公司
		</div>
		<div class="phoneconent" id="companycontent">公司或标签</div>
		<div class="phoneconent" id="inputcompany">
			<input type="text" placeholder="公司或标签" class="inputphone" value="" />
		</div>
	</div>
	<div class="note">
		备注
	</div>
	<div class="notecontent" id="notecontent">其实这个人是我自己</div>
	<div class="notecontent" id="inputnote">
		<textarea class="inputnote" placeholder="备注"></textarea>
	</div>

	<div class="tools">
		<div class="deletecontact" id="deltools" onclick="deletecon()">删除</div>
		<div class="editcontact" id="chatools" onclick="change()">编辑</div>
	</div>
</div>

</body>
</html>