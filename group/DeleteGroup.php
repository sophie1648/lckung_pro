<?php
	include '../session.php';
    include '../db.php';


        $BranchIDOrigin = $_POST["BranchID"];
        $GroupIDOrigin = $_POST["GroupID"];
        $GroupBranchIDOrigin = $_POST["GroupBranchID"];
        $sql = "DELETE from `group`
		         WHERE BranchID = '$BranchIDOrigin'AND GroupID = '$GroupIDOrigin'AND GroupBranchID = '$GroupBranchIDOrigin'";
        if(mysql_query($sql))
        {
                echo '刪除成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=group.php>';
        }
        else
        {
                echo '刪除失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=group.php>';
        }
?>