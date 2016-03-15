<!DOCTYPE html>
<html>
<head>
	<?php include('header.php');?>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/contact.css" />
	<script type="text/javascript" src="./js/contact.js"></script>
	<title>ToDo</title>

</head>
<body>
	<div>
		<div class="left" id='left'>
		<?php 
			if(isset($_SESSION['user'])){
				$name=$_SESSION['user'];
			}
			$mysqli = new mysqli('127.0.0.1', 'root', '', 'my_db');
			if(mysqli_connect_errno()){
				echo mysqli_connect_error();
			}
			$mysqli = mysqli_init();
			$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时
			$mysqli->real_connect('127.0.0.1', 'root', '', 'my_db');
			$mysqli->query("set names 'utf8'");
			$query="SELECT * FROM `contact` WHERE `userid` = '$name'";
			$results=$mysqli->query($query);
			$contactount=0;
			$account="";
			while ($row = $results->fetch_array()) {
				if($account==""){
					$account=$row[2];
				}
				echo "<div class='left_item' id='contact".$contactount."' 
					onmouseover=\"todo_selected('contact".$contactount."')\" 
					onmouseout=\"todo_unselected('contact".$contactount."')\">
					<img class='left_phpoto' src='../image/girl.jpg'/>
					<div class='left_contacts' title='./contact/singlecontact.php?contactname=".$row[2]."'>
						".$row[2]."
					</div></div>";
				$contactount+=1;
			}
		?>	
			<div class='left_item' id='newcontact'
				onmouseover="todo_selected('newcontact')" 
				onmouseout="todo_unselected('newcontact')">
				<div class='left_contacts' id='newtool'  title='./contact/newcontact.php?contactname.php'>
					添加
				</div>
			</div>
		</div>
		<div class="right" id="right">
			
		</div>
		<script type="text/javascript">
			
			document.getElementById('left').style.maxHeight=hi+"px";
			document.getElementById('left').style.height=hi+"px";
			$(function(){
				$.get("./contact/singlecontact.php?contactname=<?php echo $account;?>",function(data){ //初始將a.html include div#iframe
			　　　　$("#right").html(data);
		　　　　});
			});
		</script>
	</div>
</body>
</html>

<?php 
	//include('../footer.html');
?>