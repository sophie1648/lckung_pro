<title>刪除商店電話</title>
<?php
	include '../session.php';
	include '../db.php';
	
	$BranchTelOrigin = $_POST["BranchTel"];
     

        $sql = "delete from telephone where BranchTel='$BranchTelOrigin'";
		
		
        if(mysql_query($sql))
        {
                echo '刪除成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=telephone.php>';
        }
        else
        {
                echo '刪除失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=telephone.php>';
        }

?>
