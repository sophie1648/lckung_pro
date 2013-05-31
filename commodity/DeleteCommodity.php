<?php
	include '../session.php';
        include '../db.php'; 

	
	$CommodityIDOrigin = $_POST["CommodityID"];

        $sql = "delete from commodity 
		         where CommodityID='$CommodityIDOrigin'";
        if(mysql_query($sql))
        {
                echo '刪除成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=commodity.php>';
        }
        else
        {
                echo '刪除失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=commodity.php>';
        }
?>