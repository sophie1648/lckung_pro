<?php
	include '../session.php';
    include '../db.php';

	
        $BranchIDOrigin = $_POST["BranchID"];
        $CommodityIDOrigin = $_POST["CommodityID"];
        $GroupIDOrigin = $_POST["GroupID"];
        $sql = "DELETE from privacy
		         where BranchID = '$BranchIDOrigin' AND CommodityID = '$CommodityIDOrigin'AND GroupID = '$GroupIDOrigin'";
        if(mysql_query($sql))
        {
                echo '刪除成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=privacy.php>';
        }
        else
        {
                echo '刪除失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=privacy.php>';
        }
?>