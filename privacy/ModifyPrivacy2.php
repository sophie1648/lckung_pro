<?php
    include '../session.php';
    include '../db.php';
		
$BranchID = $_POST['BranchID']; 
$CommodityID = $_POST['CommodityID']; 
$GroupID = $_POST['GroupID']; 		
 
//判斷帳號密碼是否為空值 
//確認密碼輸入的正確性 
if($BranchID != null && $CommodityID != null && $GroupID != null) 
{ 
        $update="UPDATE `privacy`
		    	 SET BranchID = '$BranchID',
				     CommodityID = '$CommodityID',
					 GroupID = '$GroupID'
				
				 where BranchID = '$BranchIDOrigin'AND CommodityID = '$CommodityIDOrigin'AND GroupID = '$GroupIDOrigin'";
            if(mysql_query($update)) 
            { 
                echo '修改成功!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url=privacy.php>'; 
            } 
            else
            { 
                echo '修改失敗!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url= privacy.php>'; 
            } 
}
else 
{
                echo '修改失敗!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url= privacy.php>'; 
}
?>

