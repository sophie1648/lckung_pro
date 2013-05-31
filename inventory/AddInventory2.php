<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
	include '../session.php';
	include '../db.php';

	$bid = $_POST['Bid'];
	$cid = $_POST['Cid'];
	$num = $_POST['amount'];

	//搜尋資料庫資料
	$sql = " SELECT * FROM branch where BranchID = '$bid' ";
	$result = mysql_query($sql);
	$row1 = @mysql_fetch_row($result);

	$sql = " SELECT * FROM commodity where CommodityID = '$cid' ";
	$result = mysql_query($sql);
	$row2 = @mysql_fetch_row($result);

	$sql = " SELECT * FROM inventory where BranchID = '$bid' and CommodityID = '$cid' ";
	$result = mysql_query($sql);
	$row3 = @mysql_fetch_row($result);

	//判斷帳號與密碼是否為空白
	//以及MySQL資料庫裡是否有這個會員
	if($row3 == null && $bid != null && $cid != null && $num != null && $num  != 0 && $row1[0] == $bid && $row2[0] == $cid)
	{
		$sql = " INSERT INTO inventory (BranchID, commodityID, InventoryLevel) VALUES ('$bid', '$cid', $num) ";
        mysql_query($sql);
        echo '<meta http-equiv=REFRESH CONTENT=1;url=./AddInventory.php>';
	}
	else if($row3 != null)
	{
		$sql = " UPDATE inventory SET InventoryLevel = InventoryLevel + $num where BranchID = '$bid' and CommodityID = '$cid' ";
		mysql_query($sql);
		echo '<meta http-equiv=REFRESH CONTENT=1;url=./AddInventory.php>';
	}
	else
	{
        echo 'You got something wrong!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=./AddInventory.php>';
        //echo'$bid, $cid, $amount';
	}
?>