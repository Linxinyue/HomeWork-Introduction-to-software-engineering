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
			height: 300px;
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
	</style>
	<script language="javascript" type="text/javascript">

		var myDate= new Date(); 
		var startYear=myDate.getFullYear()-70; 
		var endYear=myDate.getFullYear(); 
		var obj=document.getElementById('myYear') 
		for (var i=endYear;i>=startYear;i--) 
		{ 
			obj.options.add(new Option(i,i)); 
		} 
		obj.options[obj.options.length].selected=1;


		function ajaxContact(figure,marriage,habits,character,education,currentjob,contactphone){
			var names=<?php echo $name; ?>;
			$.post("./ppf/ppfServerDatailed.php",
		    {	
		      name:names,
		      figure:figure,
		      marriage:marriage,
		      habits:habits,
		      character:character,
		      education:education,
		      currentjob:currentjob,
		      contactphone:contactphone
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
					document.getElementById('input_figure').value=document.getElementById('figure').innerHTML;
					document.getElementById('input_marriage').value=document.getElementById('marriage').innerHTML;
					document.getElementById('input_habits').value=document.getElementById('habits').innerHTML;
					document.getElementById('input_character').value=document.getElementById('character').innerHTML;
					document.getElementById('input_education').value=document.getElementById('education').innerHTML;
					document.getElementById('input_currentjob').value=document.getElementById('currentjob').innerHTML;
					document.getElementById('input_contactphone').value=document.getElementById('contactphone').innerHTML;
				}else if(document.getElementById('change_information').innerHTML=='保存'){
					document.getElementById('change_information').innerHTML='修改';
					document.getElementById('discard').style.display='none';
					
					// alert(document.getElementById("myYear").value);

					$(content_input).hide();
					$(content_show).fadeIn();

					var input_figure=document.getElementById('input_figure').value;
					var input_marriage=document.getElementById('input_marriage').value;
					var input_habits=document.getElementById('input_habits').value;
					var input_character=document.getElementById('input_character').value;
					var input_education=document.getElementById('input_education').value;
					var input_currentjob=document.getElementById('input_currentjob').value;
					var input_information=document.getElementById('input_contactphone').value;

					ajaxContact(input_figure,input_marriage,input_habits,input_character,input_education,
						input_currentjob,input_information);

					document.getElementById('figure').innerHTML=input_figure;
					document.getElementById('marriage').innerHTML=input_marriage;
					document.getElementById('habits').innerHTML=input_habits;
					document.getElementById('character').innerHTML=input_character;
					document.getElementById('education').innerHTML=input_education;
					document.getElementById('currentjob').innerHTML=input_currentjob;
					document.getElementById('contactphone').innerHTML=input_information;

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
				<div>体型：</div>
				<div>婚姻：</div>
				<div>个人习惯：</div>
				<div>性格：</div>
				<div>教育程度：</div>
				<div>当前职业：</div>
				<div>联系方式：</div>
			</div>
			<div class="left_right" id="content_show">
				<div class="db_base_information" id='figure'><?php echo $row[9] ?></div>
				<div class="db_base_information" id='marriage'><?php echo $row[10] ?></div>
				<div class="db_base_information" id='habits'><?php echo $row[11] ?></div>
				<div class="db_base_information" id='character'><?php echo $row[12] ?></div>
				<div class="db_base_information" id='education'><?php echo $row[13] ?></div>
				<div class="db_base_information" id='currentjob'><?php echo $row[14] ?></div>
				<div class="db_base_information" id='contactphone'><?php echo $row[15] ?></div>
			</div>
			<div class="left_right_input" id="content_input">
				<div class="single_information">
					<input type='text' name='figure' id='input_figure'/>
				</div>
				<div class="single_information">
					<input type='text' name='marriage' id='input_marriage'/>
					<!-- <select id="myYear"></select>  -->
				</div>
				<div class="single_information">
					<input type='text' name='habits' id='input_habits'/>
				</div>
				<div class="single_information">
					<input type='text' name='bloodtype' id='input_character'/>
				</div>
				<div class="single_information">
					<input type='text' name='education' id='input_education'/>
				</div>
				<div class="single_information">
					<input type='text' name='currentjob' id='input_currentjob'/>
				</div>
				<div class="single_information">
					<input type='text' name='contactphone' id='input_contactphone'/>
				</div>
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