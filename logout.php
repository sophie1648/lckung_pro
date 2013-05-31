<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../public/stylesheets/logout.css" media="screen" />
<?php
	//將session清空
	unset($_SESSION['id']);
	echo "<center><div class='logout'>登出中......</div></center>";
	echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
?>