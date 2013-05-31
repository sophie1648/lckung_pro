<?php
	include '../session.php';
	include '../db.php';
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>刪除商店電話</title>
</head>

<body>

<FORM action="DeleteTel2.php" method="post"> 
    請輸入欲刪除的電話的商店編號： <INPUT type="text" name="BranchID" size="20"><P> 
    <input type="submit" value="提交"> 
    <input type="reset" value="重填"> 
</FORM> 
<?php 

    echo '<a href="telephone.php">返回</a>'; 
?> 
</body>
</html>

