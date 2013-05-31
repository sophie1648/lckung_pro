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
<FORM action="AddPrivacy2.php" method="post"> 
    商店編號： <INPUT type="text" name="BranchID" size="20"><P> 
    商品編號： <INPUT type="text" name="CommodityID" size="20"><P> 
    群組編號： <INPUT type="text" name="GroupID" size="20"><P> 

    <input type="submit" value="提交"> 
    <input type="reset" value="重填"> 
</FORM> 
<?php 
    echo '<a href="./privacy.php">返回</a>'; 
?> 
</body>
