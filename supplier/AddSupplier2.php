<?php
    include '../session.php';
    include '../db.php';
		
		
$SupplierID = $_POST['SupplierID']; 
$SupplierName = $_POST['SupplierName']; 
$SupplierTel = $_POST['SupplierTel']; 
$SupplierZipcode = $_POST['SupplierZipcode']; 
$SupplierAddr = $_POST['SupplierAddr']; 
$SupplierEmail = $_POST['SupplierEmail']; 

  
//判斷帳號密碼是否為空值 
//確認密碼輸入的正確性 
if($SupplierID != null && $SupplierName != null && $SupplierTel != null  && $SupplierZipcode != null && $SupplierAddr != null ) 
{ 
        $valid = "SELECT * FROM supplier WHERE SupplierID = '$SupplierID';" ; 
        $valid2 = mysql_query($valid) ; 
        if ($same = mysql_fetch_row($valid2)) 
        { 
            echo "已有此供應商，請重新輸入"; 
            echo '<meta http-equiv=REFRESH CONTENT=2;url=AddSupplier.php>'; 
            //header ("Location:register.php?err=1") ; 
        } 
        else
        { 
            //新增資料進資料庫語法 

            $sql = "insert into supplier (SupplierID, SupplierName, SupplierTel, SupplierZipcode, SupplierAddr, SupplierEmail) VALUES ('$SupplierID', '$SupplierName', '$SupplierTel', '$SupplierZipcode', '$SupplierAddr', '$SupplierEmail') "; 
            if(mysql_query($sql)) 
            { 
                echo '新增成功!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url=AddSupplier.php>'; 
            } 
            else
            { 
                echo '新增失敗!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url=AddSupplier.php>'; 
            } 
        } 
} 
else
{ 
        echo '資料輸入錯誤，請重輸入!'; 
        echo '<meta http-equiv=REFRESH CONTENT=2;url=AddSupplier.php>'; 
} 
  



?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
