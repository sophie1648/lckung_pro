<?php
    include '../session.php';
	include '../db.php';
		
		
$SupplierID = $_POST['SupplierID']; 
$SupplierName = $_POST['SupplierName']; 
$SupplierTel = $_POST['SupplierTel']; 
$SupplierZipCode = $_POST['SupplierZipCode']; 
$SupplierAddr = $_POST['SupplierAddr']; 
$SupplierEmail = $_POST['SupplierEmail']; 

$SupplierIDOrigin = $_POST['SupplierIDOrigin'];   
  

//判斷帳號密碼是否為空值 
//確認密碼輸入的正確性 
if($SupplierID != null && $SupplierName != null && $SupplierTel != null  && $SupplierZipCode != null && $SupplierAddr != null ) 
{ 
        $update="UPDATE `supplier`
		    	 SET SupplierID = '$SupplierID',
				     SupplierName = '$SupplierName',
					 SupplierTel = '$SupplierTel',
					 SupplierZipCode = '$SupplierZipCode',
					 SupplierAddr = '$SupplierAddr',
					 SupplierEmail = '$SupplierEmail'
				 where SupplierID ='$SupplierIDOrigin'";
			if(mysql_query($update)) 
            { 
                echo '修改成功!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url=supplier.php>'; 
            } 
            else
            { 
                echo '修改失敗!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url=supplier.php>'; 
            } 
}
else 
{
                echo '修改失敗!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url=supplier.php>'; 
}
?>

