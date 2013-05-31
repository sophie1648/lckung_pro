<?php include '../session.php'; ?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
	<title>存貨</title>
	<script type='text/javascript' src='../public/javascripts/jquery.min.js'></script>
</head>

<body>
	<?php
		echo"<div class='addInventory'> ";
		echo"<div class='title'>增加存貨</div>";
		echo"	<form class='addForm' method='post' action='../inventory/AddInventory2.php'>";
		echo"		<div>商店編號:<input type=text name='Bid' maxlenth=30></div>";
		echo"		<div>商品名稱:<input type=text name='Cid' maxlenth=30></div>";
		echo"		<div>數   量:<input type=text name='amount' maxlenth=30></div>";
		
		echo"		<input type=submit value='輸入'>";
		echo"	</form>";
		echo "</div>";
	?>
	<a href='../inventory/inventory.php'>返回</a>
</body>

</html>