<!DOCTYPE html>
<html>
<head>
	<?php include('header.php');?>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<script type="text/javascript" src="http://libs.useso.com/js/jquery/1.7.2/jquery.min.js"></script>
	<title>ToDo</title>
	<link rel="stylesheet" type="text/css" href="./css/maindiary.css" />
	<style type="text/css">
		
	</style>
	<script type="text/javascript" src="./js/maindiary.js"></script>
</head>
<body>
	<div>
		<div class="left" id='left'>
				<!-- <div class="left_item" id='today' 
					onmouseover="todo_selected('today')" 
					onmouseout="todo_unselected('today')">
					<img class="left_phpoto" src="../image/daliypic.jpg"/>
					<div class="left_book_title" title="./day/diary.php?title=2">
						张筱萱
					</div>
					<div class="left_book_dec">
						描述火狐，傲游，浏览器通用描述火狐，傲游，浏览器通用描述火狐，傲游，浏览器通用
					</div>
					<div class="left_book_date">
						创建日期：<br/>2015年9月25日22:50:34<br/>
						最近修改：<br/>2015年9月25日22:50:53	
					</div>
				</div> -->	
				<?php 
					if(isset($_SESSION['user'])){
						$name=$_SESSION['user'];
					}else{
						echo "<script>window.location.href='http://127.0.0.1';</script>";
					}
					$mysqli = new mysqli('127.0.0.1', 'root', '', 'my_db');
					if(mysqli_connect_errno()){
						echo mysqli_connect_error();
					}

					$mysqli = mysqli_init();
					$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时
					$mysqli->real_connect('127.0.0.1', 'root', '', 'my_db');
					$mysqli->query("set names 'utf8'");
					$query="SELECT * FROM `diarybook` WHERE `userid` = '$name'";
					$results=$mysqli->query($query);
					while ($row = $results->fetch_array()) {
						$account=$row[0];
						// require('singlelock.php');
						echo "<div class='left_item' id='".$row[0]."' 
					onmouseover=\"todo_selected('".$row[0]."')\" 
					onmouseout=\"todo_unselected('".$row[0]."')\">
					<img class='left_phpoto' src='../image/daliypic.jpg'/>
					<div class='left_book_title' title='./day/diary.php?title=".$row[0]."'>
						".$row[0]."
					</div>
					<div class='left_book_dec'>
						".$row[1]."
					</div>
					<div class='left_book_date'>
						创建日期：<br/>".$row[2]."<br/>
						最近修改：<br/>".$row[3]."	
					</div>
				</div>";
					}
				?>	

				<div class="left_item" id="editbook" 
					onmouseover="todo_selected('editbook')" 
					onmouseout="todo_unselected('editbook')">
					<div class="editbook" title="./day/editbook.php">
						编辑
					</div>
				</div>
		</div>
		<div class="right" id="right">
			
		</div>
		<script type="text/javascript">
			document.getElementById('left').style.maxHeight=hi+"px";
			document.getElementById('left').style.height=hi+"px";
		</script>
	</div>
</body>
</html>

<?php 
	//include('../footer.html')
?>