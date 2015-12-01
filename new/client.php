<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function showHint(){
			var str='00';
			if (str.length==0){ 
				document.getElementById("txtHint").innerHTML="";
				return;
			}
			if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			}
			else{// code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
					document.getElementById("target").innerHTML=xmlhttp.responseText;
				}
			}
			xmlhttp.open("GET","iserver.php?q="+str,true);
			xmlhttp.send();
		}
	</script>
	<style type="text/css">
		.test{
			width: 300px;
			height: 150px;
			margin-bottom: 50px;
			background-color: gray;
		}
	</style>
</head>
<body>
<div class="test" id='1' onclick="showHint()">1</div>
<div class="test" id='target'>4</div>
</body>
</html>