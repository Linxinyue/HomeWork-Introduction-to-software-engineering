<?php 
	session_start();
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
	$query="SELECT * FROM `informations` WHERE `name` = '$name'";
	$results=$mysqli->query($query);
	$row = $results->fetch_array();
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<link rel="stylesheet" type="text/css" href="../../style/ppfinformation.css">
	<style type="text/css">
		.base_inform{
			display: none;
		}
	</style>
	<script type="text/javascript">
		function information_select () {
			document.getElementById('change_information').style.background='#0F5EB7';
		}
		function information_unselect () {
			document.getElementById('change_information').style.background='#72A8D7';
		}
		function information_click () {
			if(document.getElementById('change_information').innerHTML=='修改'){
				document.getElementById('change_information').innerHTML='保存';
				//code here...
				//alert(document.getElementById('name').innerHTML);
				document.getElementById('discard').style.display='inline-block';
				document.getElementById('input_name').placeholder=document.getElementById('name').innerHTML;
				document.getElementById('input_birthday').placeholder=document.getElementById('birthday').innerHTML;
				document.getElementById('input_sex').placeholder=document.getElementById('sex').innerHTML;
				document.getElementById('input_bloodtype').placeholder=document.getElementById('bloodtype').innerHTML;
				document.getElementById('input_birthplace').placeholder=document.getElementById('birthplace').innerHTML;
				document.getElementById('input_liveplace').placeholder=document.getElementById('liveplace').innerHTML;
				document.getElementById('input_information').innerHTML=document.getElementById('simpleinformation').innerHTML;
			}else{
				document.getElementById('change_information').innerHTML='修改';
				document.getElementById('discard').style.display='none';
				//code here...
				//alert(document.getElementById('input_name').value);
				document.getElementById('name').innerHTML=document.getElementById('input_name').value;
				document.getElementById('birthday').innerHTML=document.getElementById('input_birthday').value;
				document.getElementById('sex').innerHTML=document.getElementById('input_sex').value;
				document.getElementById('bloodtype').innerHTML=document.getElementById('input_bloodtype').value;
				document.getElementById('birthplace').innerHTML=document.getElementById('input_birthplace').value;
				document.getElementById('liveplace').innerHTML=document.getElementById('input_liveplace').value;
				document.getElementById('simpleinformation').innerHTML=document.getElementById('input_information').value;
			}
			$(base_information).slideToggle();
			$(base_inform).slideToggle();
		}
	</script>
</head>
<body>
	<div class="base_information" id='base_information'>
		<div class="ppf_information_title">基本资料</div>
		<hr noshade="noshade" size="1px" class="ppf_hr"/>
		<div class="main_information">
			<div class="single_information">教育背景:&nbsp;&nbsp;
			<div style="display:inline;" id='simpleinformation'><?php echo $row[23] ?></div></div>
		</div>
		
	</div>
	<div class="base_inform" id='base_inform'>
		<div class="ppf_information_title">基本资料</div>
		<hr noshade="noshade" size="1px" class="ppf_hr"/>
		<form>
			<div class="main_information">
				<div class="single_information">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;姓名:&nbsp;&nbsp;
					<input type='text' name='username' id='input_name' placeholder='新月'/>
				</div>
				<div class="single_information">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;生日:&nbsp;&nbsp;
					<input type='text' name='birthday' id='input_birthday' placeholder='2000-01-01'/>
				</div>
				<div class="single_information">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;性别:&nbsp;&nbsp;
					<input type='text' name='sex' id='input_sex' placeholder='男'/>
				</div>
				<div class="single_information">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;血型:&nbsp;&nbsp;
					<input type='text' name='blood_type' id='input_bloodtype' placeholder=''/>
				</div>
				<div class="single_information">
					&nbsp;&nbsp;&nbsp;出生地:&nbsp;&nbsp;
					<input type='text' name='birthplace' id='input_birthplace' placeholder=''/>
				</div>
				<div class="single_information">
					&nbsp;&nbsp;&nbsp;居住地:&nbsp;&nbsp;
					<input type='text' name='liveplace' id='input_liveplace' placeholder=''/>
				</div>
				<div class="single_information" style="float:left;">
					个人简介:&nbsp;&nbsp;
				</div>
					<textarea  style="resize:none;" id='input_information' cols='50' rows='10' name='simple_information' placeholder=''/>
			</div>
		</form>
	</div>
	
	<div class="change" id='discard'
		onmouseover="information_select()" onmouseout="information_unselect()" 
		onclick="information_click()" style="float:left;margin-left:450px;display:none;">取消</div>
	<div class="change" id='change_information'
		onmouseover="information_select()" onmouseout="information_unselect()" 
		onclick="information_click()">修改</div>

</body>
</html>