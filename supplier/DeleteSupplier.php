<?php
    include '../session.php';
    include '../db.php';

	
	$SupplierIDOrigin = $_POST["SupplierID"];

        $sql = "delete from supplier 
		         where SupplierID='$SupplierIDOrigin'";
        if(mysql_query($sql))
        {
                echo '刪除成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=supplier.php>';
        }
        else
        {
                echo '刪除失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=supplier.php>';
        }
?>