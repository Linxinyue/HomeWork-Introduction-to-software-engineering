<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<?php 
	session_start();
	if(isset($_SESSION['isLogin'])&&$_SESSION['isLogin']==1){
	}
	else{
		echo '<script language=javascript>window.location.href="login.php"</script>'; 
	}
?>
afjlksdjflkajdf
<a href="logout.php">logout</a>