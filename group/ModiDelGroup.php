<?php
	include '../session.php';
    include '../db.php';
	
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改/刪除</title>
</head>

<body>

<form action="ModiDelGroup2.php" method="post"> 
    商店編號： <INPUT type="text" name="BranchID" size="20"><P> 
    群組編號： <INPUT type="text" name="GroupID" size="20"><P> 
    商品群組編號： <INPUT type="text" name="GroupBranchID" size="20"><P> 


    <input type="submit" value="提交"> 
    <input type="reset" value="重填"> 
</form> 

<a href="group.php">返回</a>
 
</body>
</html>