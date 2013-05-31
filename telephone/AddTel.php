<?php
    include '../session.php';
    include '../db.php';
?>

<head>
<title>新增商店電話</title>
</head>

<body>

<p>
<form action="AddTel2.php" method="post"> 
           商店編號:<INPUT type="text" name="BranchID" size="20"><P> 
           商店連絡電話:<INPUT type="text" name="BranchTel" size="20"><P>  
    <input type="submit" value="提交"> 
    <input type="reset" value="重填"> 
</form> 

<a href="telephone.php">返回</a>
 
</body>