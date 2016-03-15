<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<?php 
session_start();
if(isset($_SESSION['isLogin'])){
	echo '<script language=javascript>window.location.href="index.php"</script>'; 
}
else{
	echo "<script language=javascript>alert('请先登录')</script>"; 
	echo '<script language=javascript>window.location.href="../index.php"</script>'; 
}
?>