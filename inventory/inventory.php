<?php include '../session.php'; ?>
<html>
<head>
	<title>存貨新增/修改/刪除</title>
	<script type='text/javascript' src='../public/javascripts/jquery.min.js'></script>
</head>

<body>

	<form action="../inventory/AddInventory.php" method="post"> 
		<input type="submit" value="新增"> 
	</form> 

	<form action="../inventory/ModiDelInventory.php" method="post"> 
		<input type="submit" value="修改/刪除"> 
	</form> 

	 
	<a href='../index.php'>返回</a> 
	 

</body>
</html>