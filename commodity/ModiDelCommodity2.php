<?php
	include '../session.php';
    include '../db.php';
	$CommodityIDOrigin = $_POST["CommodityID"];
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="ModifyCommodity2.php" method="post"> 
<?php
	$display = "SELECT CommodityID, CommodityName, CommodityIntro, CommodityPrice,CommoditySupplier, BigCategory, MediumCategory, SmallCategory
	            FROM   commodity 
				WHERE  CommodityID = '$CommodityIDOrigin'";
	$done = mysql_query($display) ;
if($item = mysql_fetch_row($done))
{
	echo "<table>";
    echo "<tr><td>商品編號：<INPUT type='text' name='CommodityID' size='20' value='$item[0]'> <P></td></tr>";
    echo "<tr><td>商品名稱：<INPUT type='text' name='CommodityName' size='20' value='$item[1]'><P></td></tr>";
    echo"<tr><td>商品簡介： <INPUT type='text' name='CommodityIntro' size='20' value='$item[2]'><P></td></tr>";
    echo "<tr><td>商品單價：<INPUT type='text' name='CommodityPrice' size='20' value='$item[3]'><P></td></tr>";   
    echo "<tr><td>供應商：<INPUT type='text' name='CommoditySupplier' size='20' value='$item[4]'><P></td></tr>"; 
    echo "<tr><td>大類別：<INPUT type='text' name='BigCategory' size='20' value='$item[5]'><P></td></tr>";
    echo "<tr><td>中類別：<INPUT type='text' name='MediumCategory' size='20' value='$item[6]'><P></td></tr>"; 
    echo "<tr><td>小類別：<INPUT type='text' name='SmallCategory' size='20' value='$item[7]'><P></td></tr>";
    echo "</table>"  ;
    echo "<input type='hidden' name='CommodityIDOrigin' value='$CommodityIDOrigin'>";

    echo "<input type='submit' value='修改送出'> ";
    echo "<input type='reset' value='重填'> ";
    echo "</tr>";
    echo "</FORM>";

    echo "<FORM action='DeleteCommodity.php' method='post'>" ;
    echo "<input type='hidden' name='CommodityID' value='$CommodityIDOrigin'>";

    echo "<input type='submit' value='刪除'> ";
	echo "</FORM>"; 
}
else
{
     echo '沒有此項商品!';
     echo '<meta http-equiv=REFRESH CONTENT=2;url=./commodity.php>';

}
?>
</body>

</html>