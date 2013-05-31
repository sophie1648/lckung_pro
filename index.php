<?php include 'session.php'; ?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body>
	<?php
		if( isset( $_SESSION['id'] ) )
		{
			echo"
			<head>
				<title>主頁</title>
				<script type='text/javascript' src='./public/javascripts/jquery.min.js'></script>
				<link rel='stylesheet' type='text/css' href='./public/stylesheets/share.css' media='screen' />
			</head>
				<div class='navigation'>
					<span class='title'>lckung_Pro_MainPage</span>
					<span class='id'>".$_SESSION['id']."</span>
					<a href='./commodity/commodity.php'>商品</a>
					<a href='./branch/branch.php'>商店</a>
					<a href='./telephone/telephone.php'>商店電話</a>
					<a href='./employee/employee.php'>員工資料</a>
					<a href='./supplier/supplier.php'>供應商</a>
					<a href='./inventory/inventory.php'>存貨</a>
					
					<a href='transfer_record.php'>調貨記錄</a>
					<a href='procurement.php'>進貨</a>
					<a href='transaction.php'>交易記錄</a>
					<a href='./privacy/privacy.php'>隱私設定</a>
					<a href='./group/group.php'>群組設定</a>
					<a href='./logout.php'>登出</a>
				</div>
			";
			
		}
	?>


<?php
	if( !isset( $_SESSION['id'] ) )
	{
		echo"
			<head>
				<title>註冊/登入</title>
				<script type='text/javascript' src='../public/javascripts/jquery.min.js'></script>
			</head>
		";
		//echo"<link rel='stylesheet' type='text/css' href='../public/stylesheets/index.css' media='screen' />";
		echo"<div class='bar'>";
			echo"<div class='title'>lckung_Style</div>";
			echo"<div class='login'> ";
			echo"	<form  class='loginForm' method='post' action='connect.php'>";
			echo"		帳號:<input type='text' name='id'>";
			echo"		密碼:<input type='password' name='pw'>";
			echo"		<input type='submit' value='登入'>";
			echo"	</form>";
			echo"</div>";
		echo"</div>";

		echo"<div class='reg'> ";
		echo"<div class='regLogo'>註冊</div>";
		echo"	<form class='regForm' method='post' action='register.php'>";
		echo"		帳號:<input type=text name='id' maxlenth=40>";
		echo"		密碼:<input type=password name='pw' maxlenth=12>";
		echo"		確認密碼:<input type=password name='pw2' maxlenth=12>";
		
		echo"		<input type=submit value='註冊'>";
		echo"	</form>";
		echo "</div>";
	
	}
?>

</body>
</html>