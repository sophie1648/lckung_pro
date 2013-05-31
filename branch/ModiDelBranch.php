<?php
	include '../session.php';
	include '../db.php';
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商店資訊</title>
</head>

<body>

<form action="ModiDelBranch2.php" method="post"> 
    商店編號： <input type="text" name="BranchID" size="20"><P> 
    <input type="submit" value="提交"> 
    <input type="reset" value="重填"> 
</form> 
<?php 

    echo '<a href="branch.php">返回</a>'; 
?> 
</body>
</html>

