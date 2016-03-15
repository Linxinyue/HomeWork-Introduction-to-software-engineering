<!DOCTYPE html>
<html>
<head>
	<?php include('header.php');?>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<title>ToDo</title>
	<link rel="stylesheet" type="text/css" href="./css/maindiary.css" />
	<link rel="stylesheet" type="text/css" href="./css/yahei.css" />
	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript" src="./js/maindiary.js"></script>
</head>
<body>
	<div>
		<div class="left" id='left'>
				<!-- <div class="left_item">
					<div class="booktitle" title="./day/diary.php?title=2">
						迷梦记
					</div>
					<div class="bookdate">
						2015-9-25
					</div>
				</div>	 -->
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
					$account="";
					$couter=0;
					while ($row = $results->fetch_array()) {
						if($account==""){
							$account=$row[0];
						}
						// require('singlelock.php');
						echo "<div class='left_item'
							onclick=\"seemore('./day/diary.php?title=".$row[0]."')\">
							<div class='booktitle'>
								".$row[0]."</div>
							<div class='bookdate'>
								".$row[3]."
							</div></div>";
					}
				?>	

				<div class="left_item" id="editbook" onclick="seemore('./day/editbook.php')">
					编辑
				</div>
		</div>
		<div class="right" id="right">
			
		</div>
		<script type="text/javascript">
			$(function(){
				$.get("./day/diary.php?title=<?php echo $account;?>",function(data){ //初始將a.html include div#iframe
					$("#right").html(data);
				});
			});
			document.getElementById('left').style.maxHeight=hi+"px";
			document.getElementById('left').style.height=hi+"px";
		</script>
	</div>
</body>
</html>

<?php 
	//include('../footer.html')
?>