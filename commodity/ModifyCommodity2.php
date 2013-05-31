<?php
    include '../session.php';
	include '../db.php';
		
$CommodityID = $_POST['CommodityID']; 
$CommodityName = $_POST['CommodityName']; 
$CommodityIntro = $_POST['CommodityIntro']; 
$CommodityPrice = $_POST['CommodityPrice']; 
$CommoditySupplier = $_POST['CommoditySupplier']; 
$BigCategory = $_POST['BigCategory']; 
$MediumCategory = $_POST['MediumCategory']; 
$SmallCategory = $_POST['SmallCategory']; 

$CommodityIDOrigin = $_POST['CommodityIDOrigin'];   
  

//判斷帳號密碼是否為空值 
//確認密碼輸入的正確性 
if($CommodityID != null && $CommodityName != null && $CommodityPrice != null  && $CommoditySupplier != null && $BigCategory != null && $MediumCategory != null && $SmallCategory != null) 
{ 
        $update="UPDATE `commodity`
		    	 SET CommodityID = '$CommodityID',
				     CommodityName = '$CommodityName',
					 CommodityIntro = '$CommodityIntro',
					 CommodityPrice = '$CommodityPrice',
					 CommoditySupplier = '$CommoditySupplier',
					 BigCategory = '$BigCategory',
					 MediumCategory = '$MediumCategory',
					 SmallCategory = '$SmallCategory'
				 where CommodityID ='$CommodityIDOrigin'";
            if(mysql_query($update)) 
            { 
                echo '修改成功!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url=commodity.php>'; 
            } 
            else
            { 
                echo '修改失敗!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url=commodity.php>'; 
            } 
}
else 
{
                echo '修改失敗!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url=commodity.php>'; 
}
?>

