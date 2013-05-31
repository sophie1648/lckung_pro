<?php include '../session.php'; ?>

<head>
<title>新增商品</title>
</head>

<body>

<div>新增</div>
<form action="AddCommodity2.php" method="post"> 
    商品編號： <INPUT type="text" name="CommodityID" size="20"><P> 
    商品名稱： <INPUT type="text" name="CommodityName" size="20"><P> 
    商品簡介： <INPUT type="text" name="CommodityIntro" size="100"><P> 
    商品單價： <INPUT type="text" name="CommodityPrice" size="20"><P>     
    供應商： <INPUT type="text" name="CommoditySupplier" size="20"><P> 
    大類別： <INPUT type="text" name="BigCategory" size="20"><P> 
    中類別： <INPUT type="text" name="MediumCategory" size="20"><P> 
    小類別： <INPUT type="text" name="SmallCategory" size="20"><P> 
    <input type="submit" value="提交"> 
    <input type="reset" value="重填"> 
</form>  
<a href="commodity.php">返回</a> 
 
</body>
