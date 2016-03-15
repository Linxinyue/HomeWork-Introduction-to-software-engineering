<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
	<title>show window</title>
	<style>
		html,body{
			font-size:12px;
			margin:0px;
			height:100%;
		}
		.mesWindow{
			border:#666 1px solid;
			background:#fff;
		}
		.mesWindowTop{border-bottom:#eee 1px solid;margin-left:4px;padding:3px;font-weight:bold;text-align:left;font-size:12px;}
		.mesWindowContent{margin:4px;font-size:12px;}
		.mesWindow .close{height:15px;width:35px;border:none;cursor:pointer;text-decoration:underline;background:#fff}
	</style>
	<script>
		//弹出窗口方法
		function showMessageBox(wTitle,content,wWidth)
		{
			var bWidth=parseInt(document.documentElement.scrollWidth);
			var bHeight=parseInt(document.documentElement.scrollHeight);
			var back=document.createElement("div");
			back.id="back";
			var styleStr="top:0px;left:0px;position:absolute;background:#666;width:"+bWidth+"px;height:"+bHeight+"px;opacity:0.40";
			back.style.cssText=styleStr;
			document.body.appendChild(back);
			var mesW=document.createElement("div");
			mesW.id="mesWindow";
			mesW.className="mesWindow";
			mesW.innerHTML="<div class='mesWindowTop'><table width='100%' height='100%'><tr><td>"+
			wTitle+"</td><td style='width:1px;'>"+
			"<input type='button' onclick='closeWindow();' title='关闭窗口' class='close' value='关闭' />"+
			"</td></tr></table></div>"+
			"<div class='mesWindowContent' id='mesWindowContent'>"+
			content+"</div><div class='mesWindowBottom'></div>";
			styleStr="left:"+(window.outerWidth-wWidth)/2+"px;top:"+(window.outerHeight)/4+"px;position:absolute;width:"+wWidth+"px;";
			mesW.style.cssText=styleStr;
			document.body.appendChild(mesW);
		}
		//关闭窗口
		function closeWindow(){
			if(document.getElementById('back')!=null)
			{
				document.getElementById('back').parentNode.removeChild(document.getElementById('back'));
			}
			if(document.getElementById('mesWindow')!=null)
			{
				document.getElementById('mesWindow').parentNode.removeChild(document.getElementById('mesWindow'));
			}
			
		}
		//测试弹出
		function testMessageBox(){
			messContent="<div style='padding:20px 0 20px 0;text-align:center'>"+
			"用户名:<input type='text'/><br/><br/>"+"密&nbsp;&nbsp码:<input type='text'/>"+
			"</div>";
			showMessageBox('登录',messContent,350);
		}
	</script>
</head>
<body>
	<div style="padding:20px">
		<div style="text-align:center";>
			<input type="button" name="button" value="show window" onclick="testMessageBox()"/>
		</div>
	</div>
</body>
</html>

