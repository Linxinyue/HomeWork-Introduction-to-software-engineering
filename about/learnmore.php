<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>

	<style type="text/css">
		body{
			padding:0 0;
			margin:0 0; 
		}
		.time_line{
			overflow: hidden;
			width: auto;
			margin-left: 10%;
			margin-right: 10%;
			margin-top: 30px;
			padding-right: 100px;
		}
		.time{
			width: 100px;
			height: 100px;
			float: left;
		}
		.time_pic{
			position: absolute;
			width: 100px;
			float: left;
			z-index:2;
		}
		.time_text{
			position: absolute;
			margin-left: 40px;
			margin-top: 20px;
			font-size: 37pt;
			z-index:3;
		}
		.time_year{
			position: absolute;
			margin-left: 35px;
			margin-top: 100px;
			z-index:3;
		}
		.hr_time{
			size:2px;
			margin-top: 50px;
			margin-left: 120px;
		}
		.time_content{
			float: left;
			margin-left: 140px;
			width: 89%;
		}
	</style>
</head>
<body>
	<br /><br /><br />

	<?php
		for($i=0;$i<10;$i++){
			echo "<div class=\"time_line\">
		<div class=\"time\">
			<div class=\"time_text\">7</div>
			<div class=\"time_pic\"><img class='time_pic' src=\"./image/circle.png\"></div>
			<div class=\"time_year\">2015</div>
		</div>
		<div class=\"time_content\">
			视频提供了功能强大的方法帮助您证明您的观点。当您单击联机视频时，可以在想要添加的视频的嵌入代码中进行粘贴。
您也可以键入一个关键字以联机搜索最适合您的文档的视频。为使您的文档具有专业外观，Word 提供了页眉、页脚、封面和文本框设计，这些设计可互为补充。
例如，您可以添加匹配的封面、页眉和提要栏。单击“插入”，然后从不同库中选择所需元素。
主题和样式也有助于文档保持协调。当您单击设计并选择新的主题时，图片、图表或 SmartArt 图形将会更改以匹配新的主题。
当应用样式时，您的标题会进行更改以匹配新的主题。使用在需要位置出现的新按钮在 Word 中保存时间。
若要更改图片适应文档的方式，请单击该图片，图片旁边将会显示布局选项按钮。当处理表格时，单击要添加行或列的位置，然后单击加号。
在新的阅读视图中阅读更加容易。可以折叠文档某些部分并关注所需文本。
如果在达到结尾处之前需要停止读取，Word 会记住您的停止位置 - 即使在另一个设备上。视频提供了功能强大的方法帮助您证明您的观点。
当您单击联机视频时，可以在想要添加的视频的嵌入代码中进行粘贴。您也可以键入一个关键字以联机搜索最适合您的文档的视频。
为使您的文档具有专业外观，Word 提供了页眉、页脚、封面和文本框设计，这些设计可互为补充。例如，您可以添加匹配的封面、页眉和提要栏。
		</div>
		<hr class='hr_time' noshade=\"noshade\" size=\"2px;\"/>
	</div>";
		}
	?>
	<div class="time_line">
		<div class="time">
			<div class="time_text">7</div>
			<div class="time_pic"><img class='time_pic' src="./image/circle.png"></div>
			<div class="time_year">2015</div>
		</div>
		<div class="time_content">
			视频提供了功能强大的方法帮助您证明您的观点。当您单击联机视频时，可以在想要添加的视频的嵌入代码中进行粘贴。
您也可以键入一个关键字以联机搜索最适合您的文档的视频。为使您的文档具有专业外观，Word 提供了页眉、页脚、封面和文本框设计，这些设计可互为补充。
例如，您可以添加匹配的封面、页眉和提要栏。单击“插入”，然后从不同库中选择所需元素。
主题和样式也有助于文档保持协调。当您单击设计并选择新的主题时，图片、图表或 SmartArt 图形将会更改以匹配新的主题。
当应用样式时，您的标题会进行更改以匹配新的主题。使用在需要位置出现的新按钮在 Word 中保存时间。
若要更改图片适应文档的方式，请单击该图片，图片旁边将会显示布局选项按钮。当处理表格时，单击要添加行或列的位置，然后单击加号。
在新的阅读视图中阅读更加容易。可以折叠文档某些部分并关注所需文本。
如果在达到结尾处之前需要停止读取，Word 会记住您的停止位置 - 即使在另一个设备上。视频提供了功能强大的方法帮助您证明您的观点。
当您单击联机视频时，可以在想要添加的视频的嵌入代码中进行粘贴。您也可以键入一个关键字以联机搜索最适合您的文档的视频。
为使您的文档具有专业外观，Word 提供了页眉、页脚、封面和文本框设计，这些设计可互为补充。例如，您可以添加匹配的封面、页眉和提要栏。
		</div>
		<hr class='hr_time' noshade="noshade" size="2px;"/>
	</div>
	<?php
		include("header.html");
		include("footer.html");
	?>


</body>
</html>