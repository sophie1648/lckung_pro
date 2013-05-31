<?php include '../session.php'; ?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
	<title>存貨</title>
	<script type='text/javascript' src='./public/javascripts/jquery.min.js'></script>
</head>

<body>
	
		<div class='delInventory'>
		<div class='title'>修改/刪除存貨</div>
			<form class='addForm' method='post' >
				<div>商店編號:<input type=text name='Bid' maxlenth=30></div>
				<div>商品名稱:<input type=text name='Cid' maxlenth=30></div>
				<div>數   量:<input type=text name='amount' maxlenth=30></div>
		
				<input type="button" value="修改" onClick="this.form.action='ModInventory2.php';this.form.submit();"> 
				<input type="button" value="刪除" onClick="this.form.action='DelInventory2.php';this.form.submit();"> 
			</form>
		</div>
	
	<a href='../inventory/inventory.php'>返回</a>
</body>

</html>