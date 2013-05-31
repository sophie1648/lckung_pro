<title>刪除商店</title>
<?php
	include '../session.php';
        include '../db.php';


	$BranchIDOrigin = $_POST["BranchID"];

        $sql = "delete from branch 
		         where BranchID='$BranchIDOrigin'";
        if(mysql_query($sql))
        {
                echo '刪除成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=branch.php>';
        }
        else
        {
                echo '刪除失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=branch.php>';
        }
?>