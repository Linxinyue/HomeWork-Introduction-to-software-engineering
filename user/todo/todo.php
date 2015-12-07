<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./css/todo.css">
	<script type="text/javascript" src="./js/todo.js"></script>
	<title></title>
</head>
<body>
	<div id="maindiv">
		<input type="text" class="inputtodo" />
		<input type="button" class="submitbutton" value="添加" onclick="addtodo()" />
		<div id="contentdiv">
			<div class="singletodo" id="todos">
				<div class="isdone" onclick="done('todos','doneimage')">
					<img src="./img/done.jpg" class="doneimage" id="doneimage"/>
				</div>
				<div class="title">完成网站2233</div>
				<div class="content">添加少许效果1</div>
				<div class="project">工程导论1</div>
				<div class="date">4010/5/25</div>
			</div>
		</div>
	</div>

</body>
</html>