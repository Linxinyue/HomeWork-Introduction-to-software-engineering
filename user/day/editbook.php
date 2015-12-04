<link rel="stylesheet" type="text/css" href="./css/editbook.css" />
<script type="text/javascript" src="./js/editbook.js"></script>

<div class="books">
	<div class="newdiarybook" onclick="newbook()">
			新
	</div>

	<div class="newdiv" id="newbookdiv">
		<input type="text" placeholder ="title" id="newbooktitle"/> 
		<textarea id="newbookdesc" placeholder ="content"></textarea>
		<input class="button" type="button" value="submit" />
		<input class="button" type="button" value="submit" />
	</div>
	<!-- /////////////////////////////////// -->
	<div class="book">
		<div class="tools">
			<div class="setting">
				<img class="setting" src="./img/gear.png">
			</div>
			<div class="delete" onclick="deletebook('lost dream')">
				<img class="delete" src="./img/delete.png">
			</div>
		</div>
		<div class="bookinfo">
			<div class="title">lost dream</div>
			<div class="description">I lost my dream, so I can't sleep now</div>
			<div class="timediv">2015-9-9</div>
			<div class="timediv">2016-9-9</div>
		</div>
		<div class="contentinfo">
			<div class="contenttitle"> yong1</div>
			<div class="contenttitle"> yong1</div>
			<div class="contenttitle"> yong1</div>
			<div class="contenttitle"> yong1</div>
		</div>
		
	</div>

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
		while ($row = $results->fetch_array()) {
			$account=$row[0];
			echo "<div class='book'>
			<div class='tools'>
				<div class='setting'>
					<img class='setting' src='./img/gear.png'>
				</div>
				<div class='delete' onclick=\"deletebook('".$row[0]."')\">
					<img class='delete' src='./img/delete.png'>
				</div>
			</div>
			<div class='bookinfo'>
				<div class='title'>".$row[0]."</div>
				<div class='description'>".$row[1]."</div>
				<div class='timediv'>".$row[2]."</div>
				<div class='timediv'>".$row[3]."</div>
			</div>
			<div class='contentinfo'>";
			$queryd="SELECT * FROM `diary` WHERE `userid` = '$name' and `booktitle` = '$account'";
			$resultsd=$mysqlid->query($queryd);
			$countdiary=1;
			while ($rowd = $resultsd->fetch_array()) {
				if ($countdiary>4) {
					break;
				}
				if($countdiary<4){
					echo "<div class='contenttitle' onclick=\"seediary('".$row[0]."','".$rowd[0]."')\"> ".$rowd[0]."</div>";
				}else{
					echo "<div class='leasttitle' onclick=\"seediary('".$row[0]."','".$rowd[0]."')\"> ".$rowd[0]."</div>";
				}
				
				$countdiary=$countdiary+1;
			}
			echo "</div></div>";
		}
	?>
	<!-- /////////////////////////////////////////// -->	
</div>