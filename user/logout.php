<?php 
	session_start();
	if(isset($_SESSION['isLogin'])){
		unset($_SESSION['isLogin']);
	}
	echo '<script language=javascript>window.location.href="../index.php"</script>';
?>