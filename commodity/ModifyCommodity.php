<?php
	include '../session.php';
	include '../db.php';
	$CommodityIDOrigin = $_POST["CommodityID"];
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改商品資訊</title>
</head>

<body>


<FORM action="ModifyCommodity2.php" method="post"> 
<?php
	$display = "SELECT CommodityID, CommodityName, CommodityIntro, CommodityPrice,CommoditySupplier, BigCategory, MediumCategory, SmallCategory
	            FROM  `commodity` 
				WHERE  CommodityID = '$CommodityIDOrigin'";
	$done = mysql_query($display) ;
	$item = mysql_fetch_row($done);
?>

<table>
    <tr><td>商品編號： <?php  echo "<INPUT type='text' name='CommodityID' size='20' value='$item[0]'>"; ?><P></td></tr>
    <tr><td>商品名稱：<?php  echo "<INPUT type='text' name='CommodityName' size='20' value='$item[1]'>"; ?><P></td></tr>
    <tr><td>商品簡介： <?php  echo "<INPUT type='text' name='CommodityIntro' size='20' value='$item[2]'>"; ?><P></td></tr>
    <tr><td>商品單價：<?php  echo "<INPUT type='text' name='CommodityPrice' size='20' value='$item[3]'>"; ?><P></td></tr>   
    <tr><td>供應商：<?php  echo "<INPUT type='text' name='CommoditySupplier' size='20' value='$item[4]'>"; ?><P></td></tr> 
    <tr><td>大類別：<?php  echo "<INPUT type='text' name='BigCategory' size='20' value='$item[5]'>"; ?><P></td></tr>
    <tr><td>中類別： <?php  echo "<INPUT type='text' name='MediumCategory' size='20' value='$item[6]'>"; ?><P></td></tr> 
    <tr><td>小類別： <?php  echo "<INPUT type='text' name='SmallCategory' size='20' value='$item[7]'>"; ?> <P></td></tr>
</table>
<?php    
    echo "<input type='hidden' name='CommodityIDOrigin' value='$CommodityIDOrigin'>";
?>
    <input type="submit" value="提交"> 
    <input type="reset" value="重填"> 
</tr>
</FORM> 

</body>