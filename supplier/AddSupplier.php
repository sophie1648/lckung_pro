<?php
    include '../session.php';
    include '../db.php';
?>

<head>
<title>Untitled Document</title>
</head>

<body>
<p>
<b>新增</b>
<form action="AddSupplier2.php" method="post"> 
    供應商編號： <INPUT type="text" name="SupplierID" size="20"><P> 
    供應商公司名稱： <INPUT type="text" name="SupplierName" size="20"><P> 
    供應商連絡電話： <INPUT type="text" name="SupplierTel" size="20"><P> 
    供應商郵遞區號： <INPUT type="text" name="SupplierZipcode" size="20"><P>     
    供應商地址： <INPUT type="text" name="SupplierAddr" size="100"><P> 
    供應商電子信箱： <INPUT type="text" name="SupplierEmail" size="30"><P> 



    <input type="submit" value="提交"> 
    <input type="reset" value="重填"> 
</form> 

<a href="supplier.php">返回</a>
 
</body>
