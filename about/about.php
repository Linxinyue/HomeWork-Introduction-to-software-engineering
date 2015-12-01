<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../style/usual.css" />
		<link rel="stylesheet" type="text/css" href="../style/index.css" />
        <script type="text/javascript" src="http://libs.useso.com/js/jquery/1.7.2/jquery.min.js"></script>
        
		<script type="text/javascript">
			var hi=window.screen.height;
			//alert(hi);
			var index=1;
			var scrollFunc = function (e) {
			e = e || window.event;
			if (e.wheelDelta) {  //判断浏览器IE，谷歌滑轮事件           
				//alert(e.wheelDelta);
				var diff_y=e.wheelDelta;
				//alert(e.wheelDelta);
				if (e.wheelDelta > 0) { //当滑轮向上滚动时
					//alert("滑轮向上滚动0");
				    var temp = '#window' + index;
				    //alert(temp);
				    $.scrollTo(temp, 1000);
				    index--;
					
				}
				if (e.wheelDelta < 0) { //当滑轮向下滚动时
					//alert("滑轮向下滚动1");
					//alert(hi*index);
				    var temp = '#window' + index;
				    //alert(temp);
				    $.scrollTo(temp, 1000);
				    index++;
					
				}
			} else if (e.detail) {  //Firefox滑轮事件
				if (e.detail> 0) { //当滑轮向上滚动时
					//alert("滑轮向上滚动2");
				    var temp = '#window' + index;
				    //alert(temp);
				    $.scrollTo(temp, 1000);
				    index--;
					
				}
				if (e.detail< 0) { //当滑轮向下滚动时
					//alert("滑轮向下滚动3");
				    var temp = '#window' + index;
				    //alert(temp);
				    $.scrollTo(temp, 1000);
				    index++;
					
				}
			}
			//alert(index);
			if(index<=0)
				index=0;
			if(index>=5)
				index=5;
		}
		//给页面绑定滑轮滚动事件
		if (document.addEventListener) {//firefox
			document.addEventListener('DOMMouseScroll', scrollFunc, false);
			//alert("here");
		}
		//滚动滑轮触发scrollFunc方法  //ie 谷歌
		//window.onmousewheel  = scrollFunc; 
		document.onmousewheel=scrollFunc;</script>
	</head>
	<body >
		<div>

			
			<div id="window1" class="split_div">
				<p>最快！</p>
			</div>
			<div id="window2" class="split_div">
				<p>最好！</p>
			</div>
			<div id="window3" class="split_div">
				<p>最强！</p>
			</div>
			<div id="window4" class="split_div">
				<p>就是无视广告法……</p>
			</div>
			
			<div class="main_div" id="window5">
				<p class="title">SPM<p>
				<br/>
				<p class="first_graph">Google（中文名：谷歌），是一家美国的跨国科技企业，致力于互联网搜索、云计算、广告技术等领域，开发并提供大量基于互联网的产品与服务，其主要利润来自于AdWords等广告服务。Google由当时在斯坦福大学攻读理工博士的拉里·佩奇和谢尔盖·布卢姆共同创建，因此两人也被称为“Google Guys”。1998年9月4日，Google以私营公司的形式创立，设计并管理一个互联网搜索引擎“Google搜索”。Google网站则于1999年下半年启用。Google的使命是整合全球信息，使人人皆可访问并从中受益。Google是第一个被公认为全球最大的搜索引擎，在全球范围内拥有无数的用户。

			</div>
			
			
		</div>
	</body>
	<script>
		document.getElementById("window1").style.height=hi+"px";
		document.getElementById("window2").style.height=hi+"px";
		document.getElementById("window3").style.height=hi+"px";
		document.getElementById("window4").style.height=hi+"px";
	</script>
	<?php 
		include('../header.html');
		include('../footer.html');
	?>
</html>