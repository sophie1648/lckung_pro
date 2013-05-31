<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
	include '../session.php';
	include '../db.php';

	$bid = $_POST['Bid'];
	$cid = $_POST['Cid'];
	$num = $_POST['amount'];

	//搜尋資料庫資料
	$sql = " SELECT * FROM inventory where BranchID = '$bid' AND CommodityID = '$cid' ";
	$result = mysql_query($sql);
	$row1 = @mysql_fetch_row($result);


	
	//若最終為0，則刪除該筆資料
	if( $bid != null && $cid != null && $num == $row1[2] )
	{
		$sql = " DELETE FROM inventory WHERE BranchID = '$bid' AND CommodityID = '$cid' ";
        mysql_query($sql);
        echo '<meta http-equiv=REFRESH CONTENT=1;url="./ModiDelInventory.php">';
	}
	//若相減>0，則更新amount
	else if( $bid != null && $cid != null && $num < $row1[2] )
	{
		$sql = " UPDATE inventory SET InventoryLevel = InventoryLevel - $num where BranchID = '$bid' and CommodityID = '$cid' ";
		mysql_query($sql);
        echo '<meta http-equiv=REFRESH CONTENT=1;url="./ModiDelInventory.php">';
	}
	//若相減<0，拒絕
	else
	{
        echo 'You got something wrong!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url="./ModiDelInventory.php">';
        //echo'$bid, $cid, $amount';
	}
?>