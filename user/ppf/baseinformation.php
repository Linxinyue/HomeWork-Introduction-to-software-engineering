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
	<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" type="text/css" href="../../style/ppfinformation.css">
	<style type="text/css">
		.base_inform{
			display: none;
		}
		#target{
			float:right;
			margin-right:10px;
			margin-top:10px;
			margin-bottom: 30px;
		}
		.left_left{
			float: left;
			line-height: 40px;
			text-align: right;
			width: 150px;
		}
		.left_right{
			height: 300px;
			line-height: 40px;
			margin-left: 15px;
			text-align: left;
		}
		.left_right_input{
			height: 400px;
			line-height: 40px;
			margin-left: 15px;
			text-align: left;
			display: none;
		}
		.db_base_information{
			height: 40px;
		}
		.single_information{
			height: 40px;
		}
		.select_list{
			height: 25px;
		}
	</style>
	<script language="javascript" type="text/javascript">

	/*	var myDate= new Date(); 
		var startYear=myDate.getFullYear()-70; 
		var endYear=myDate.getFullYear(); 
		var obj=document.getElementById('myYear') 
		for (var i=endYear;i>=startYear;i--) 
		{ 
			obj.options.add(new Option(i,i)); 
		} 
		obj.options[obj.options.length].selected=1;*/


		function ajaxContact(realname,birthday,sex,bloodtype,birthplace,liveplace,simpleinformation){
			var names=<?php echo $name; ?>;
			$.post("./ppf/ppfServerBase.php",
		    {	
		      name:names,
		      realname:realname,
		      birthday:birthday,
		      sex:sex,
		      bloodtype:bloodtype,
		      birthplace:birthplace,
		      liveplace:liveplace,
		      simpleinformation:simpleinformation
		    },
		    function(data,status){
		      //alert("数据：" + data + "\n状态：" + status);
		      document.getElementById("target").innerHTML=data;
		    });
		     setTimeout("document.getElementById('target').innerHTML='保存成功！'",3000);
			 setTimeout("document.getElementById('target').innerHTML=''",5000);

		}
		function information_select (idstr) {
			document.getElementById(idstr).style.background='#0F5EB7';
		}
		function information_unselect (idstr) {
			document.getElementById(idstr).style.background='#72A8D7';
		}
		function information_click (idstr) {
			if(idstr=='discard'){
				document.getElementById('change_information').innerHTML='修改';
				document.getElementById('discard').style.display='none';
				$(content_input).hide();
				$(content_show).fadeIn();
			}else{
				if(document.getElementById('change_information').innerHTML=='修改'){
					document.getElementById('change_information').innerHTML='保存';

					$(content_show).hide();
					$(content_input).fadeIn();

					document.getElementById('discard').style.display='inline-block';
					document.getElementById('input_name').value=document.getElementById('username').innerHTML;
					document.getElementById('input_birthday').value=document.getElementById('birthday').innerHTML;
					document.getElementById('input_sex').value=document.getElementById('sex').innerHTML;
					document.getElementById('input_bloodtype').value=document.getElementById('bloodtype').innerHTML;
					document.getElementById('input_birthplace').value=document.getElementById('birthplace').innerHTML;
					document.getElementById('input_liveplace').value=document.getElementById('liveplace').innerHTML;
					document.getElementById('input_information').innerHTML=document.getElementById('simpleinformation').innerHTML;
				}else if(document.getElementById('change_information').innerHTML=='保存'){
					document.getElementById('change_information').innerHTML='修改';
					document.getElementById('discard').style.display='none';
					
					// alert(document.getElementById("myYear").value);

					$(content_input).hide();
					$(content_show).fadeIn();

					var input_name=document.getElementById('input_name').value;
					var input_birthday=document.getElementById('input_birthday').value;
					var input_sex=document.getElementById('input_sex').value;
					var input_bloodtype=document.getElementById('input_bloodtype').value;
					var input_birthplace=document.getElementById('input_birthplace').value;
					var input_liveplace=document.getElementById('input_liveplace').value;
					var input_information=document.getElementById('input_information').value;

					ajaxContact(input_name,input_birthday,input_sex,input_bloodtype,input_birthplace,
						input_liveplace,input_information);

					document.getElementById('username').innerHTML=input_name;
					document.getElementById('birthday').innerHTML=input_birthday;
					document.getElementById('sex').innerHTML=input_sex;
					document.getElementById('bloodtype').innerHTML=input_bloodtype;
					document.getElementById('birthplace').innerHTML=input_birthplace;
					document.getElementById('liveplace').innerHTML=input_liveplace;
					document.getElementById('simpleinformation').innerHTML=input_information;

				}
			}
			
			
		}
	</script>
</head>
<body>

	<div class="base_information">

		<div class="ppf_information_title">基本资料</div>

		<hr noshade="noshade" size="1px" class="ppf_hr"/>

		<div class="main_information">
			<div class="left_left">
				<div>姓名：</div>
				<div>生日：</div>
				<div>性别：</div>
				<div>血型：</div>
				<div>出生地：</div>
				<div>居住地：</div>
				<div>个人简介：</div>
			</div>
			<div class="left_right" id="content_show">
				<div class="db_base_information" id='username'><?php echo $row[2] ?></div>
				<div class="db_base_information" id='birthday'><?php echo $row[3] ?></div>
				<div class="db_base_information" id='sex'><?php echo $row[4] ?></div>
				<div class="db_base_information" id='bloodtype'><?php echo $row[5] ?></div>
				<div class="db_base_information" id='birthplace'><?php echo $row[6] ?></div>
				<div class="db_base_information" id='liveplace'><?php echo $row[7] ?></div>
				<div class="db_base_information" id='simpleinformation'><?php echo $row[8] ?></div>
			</div>
			<div class="left_right_input" id="content_input">
				<div class="single_information">
					<input type='text' name='username' id='input_name'/>
				</div>
				<div class="single_information">
					<input type='text' name='birthday' id='input_birthday'/>
					<!-- <select id="myYear"></select>  -->
				</div>
				<div class="single_information">
					<!-- <input type='text' name='sex' id='input_sex' placeholder='男'/> -->
					<select id="input_sex" class="select_list"> 
						<option value="保密" selected = "selected">保密</option> 
						<option value="男">男</option> 
						<option value="女">女</option> 
					</select> 
				</div>
				<div class="single_information">
					<select id="input_bloodtype" class="select_list">
						<option value="未知" selected = "selected">未知</option>
						<option value="O">O</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="AB">AB</option>
						<option value="其他">其他</option>
					</select>
				</div>
				<div class="single_information">
					<input type='text' name='birthplace' id='input_birthplace'/>
				</div>
				<div class="single_information">
					<input type='text' name='liveplace' id='input_liveplace'/>
				</div>
				<textarea  style="resize:none;margin-top:10px" 
						id='input_information' cols='50' rows='10' name='simple_information'/>
			</div>
		</div>
		
	</div>
	<div class="base_inform" id='base_inform'>
		<div class="ppf_information_title">基本资料</div>
		<hr noshade="noshade" size="1px" class="ppf_hr"/>
			
	</div>
	
	<div class="change" id='discard'
		onmouseover="information_select('discard')" onmouseout="information_unselect('discard')" 
		onclick="information_click('discard')" style="float:left;margin-left:450px;display:none;">取消</div>

	<div class="change" id='change_information'
		onmouseover="information_select('change_information')" onmouseout="information_unselect('change_information')" 
		onclick="information_click('change_information')">修改</div>
	<div id='target' ></div>

	
</body>
</html>