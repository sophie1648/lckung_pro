<?php
	include '../session.php';
    include '../db.php';
	
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改/刪除</title>
</head>

<body>

<FORM action="ModiDelSupplier2.php" method="post"> 
    供應商編號： <INPUT type="text" name="SupplierID" size="20"><P> 
    <input type="submit" value="提交"> 
    <input type="reset" value="重填"> 
</FORM> 
<?php 

    echo '<a href="supplier.php">返回</a>'; 
?> 
</body>
</html>