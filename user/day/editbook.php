<link rel="stylesheet" type="text/css" href="./css/editbook.css" />
<link rel="stylesheet" type="text/css" href="./css/yahei.css" />
<script type="text/javascript" src="./js/editbook.js"></script>

<div class="books" id="maindiv">
	<div class="newdiv" id="newbookdiv">
		<input type="text" placeholder ="标题" id="newbooktitle"/> 
		<textarea id="newbookdesc" placeholder ="描述" id="newbookdesc"></textarea>
		<div class="changetools">
			<div class="changetool" onclick="changecancel()">取消</div>
			<div class="changetool" id="changesave" onclick="changesave()">确认</div>
		</div>
	</div>
	<!-- /////////////////////////////////// -->
	<!-- <div class="book">
		<div class="bookinfo">
			<div class="title">lost dream</div>
			<div class="description">I lost my dream, so I can't sleep now</div>
			<div class="timediv">2015-9-9</div>
		</div>
		<div class="contentinfo">
			<div class="contenttitle"> yong1</div>
			<div class="contenttitle"> yong1</div>
			<div class="contenttitle"> yong1</div>
		</div>
		<div class="tools">
			<div class="setting">
				修
			</div>
			<div class="delete" onclick="deletebook('lost dream')">
				删
			</div>
		</div>
	</div> -->

	<?php 
		session_start();
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

		$mysqlid = mysqli_init();
		$mysqlid->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时
		$mysqlid->real_connect('127.0.0.1', 'root', '', 'my_db');
		$mysqlid->query("set names 'utf8'");

		$query="SELECT * FROM `diarybook` WHERE `userid` = '$name'";
		$results=$mysqli->query($query);
		$mycounter=0;
		while ($row = $results->fetch_array()) {
			$account=$row[0];
			echo "<div class='book'>
				<div class='bookinfo'>
					<div class='title' id='title".$mycounter."'>".$row[0]."</div>
					<div class='description' id='desc".$mycounter."'>".$row[1]."</div>
					<div class='timediv'>".$row[2]."</div>
				</div>
				<div class='contentinfo'>";
				$queryd="SELECT * FROM `diary` WHERE `userid` = '$name' and `booktitle` = '$account'";
				$resultsd=$mysqlid->query($queryd);
				$countdiary=1;
				while ($rowd = $resultsd->fetch_array()) {
					if($countdiary>3){
						break;
					}
					echo "<div class='contenttitle' onclick=\"seediary('".$row[0]."','".$rowd[0]."')\"> ".$rowd[0]."</div>";
					$countdiary=$countdiary+1;
				}
			echo "</div><div class='tools'>
				<div class='setting' onclick=\"change('".$mycounter."','".$row[0]."')\">
					修
				</div>
				<div class='delete' onclick=\"deletebook('".$row[0]."')\">
					删
				</div>
			</div></div>";
			$mycounter+=1;
		}
	?>
	<!-- /////////////////////////////////////////// -->
	<div class="book" id="book" onclick="newbook()">
		添加
	</div>	
</div>