<?php
	include '../session.php';
    include '../db.php';
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改/刪除</title>
</head>

<body>

<form action="ModiDelEmployee2.php" method="post"> 
    員工編號： <INPUT type="text" name="EmployeeID" size="20"><P> 
    <input type="submit" value="提交"> 
    <input type="reset" value="重填"> 
</form> 
 
    <a href="employee.php">返回</a>

</body>
</html>