<!doctype html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>php教程 ajax 返回404错误</title>
</head>
<body>
<script language="网页特效">
var xmlhttp = new activexobject("microsoft.xmlhttp"); 
xmlhttp.open("post","./upload.php",false); 
xmlhttp.setrequestheader("content-type", "multipart/form-data;"); 
xmlhttp.setrequestheader("content-length", postlength); 
xmlhttp.send(package);
</script>
代码看上去没有错误，返回我们输出
alert(xmlhttp.status);
返回值为404 ,查了一下404是找不到文件呈，在iis也是这么干的，所以详细查一下原理是路径错了。
xmlhttp.open("post","./upload.php",false);

</body>
</html>