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
  
  
//判斷帳號密碼是否為空值 
//確認密碼輸入的正確性 
if($CommodityID != null && $CommodityName != null && $CommodityPrice != null  && $CommoditySupplier != null && $BigCategory != null && $MediumCategory != null && $SmallCategory != null) 
{ 
        $valid = "SELECT * FROM commodity WHERE CommodityID = '$CommodityID';" ; 
        $valid2 = mysql_query($valid) ; 
        if ($same = mysql_fetch_row($valid2)) 
        { 
            echo "已有此商品，請重新輸入"; 
            echo '<meta http-equiv=REFRESH CONTENT=2;url=AddCommodity.php>'; 
            //header ("Location:register.php?err=1") ; 
        } 
        else
        { 
            //新增資料進資料庫語法 

            $sql = "insert into commodity (CommodityID, CommodityName, CommodityIntro, CommodityPrice, CommoditySupplier, BigCategory, MediumCategory, SmallCategory) VALUES ('$CommodityID', '$CommodityName', '$CommodityIntro', '$CommodityPrice', '$CommoditySupplier', '$BigCategory', '$MediumCategory', '$SmallCategory') "; 
            if(mysql_query($sql)) 
            { 
                echo '新增成功!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url=AddCommodity.php>'; 
            } 
            else
            { 
                echo '新增失敗!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url=AddCommodity.php>'; 
            } 
        } 
} 
else
{ 
        echo '資料輸入錯誤，請重輸入!'; 
        echo '<meta http-equiv=REFRESH CONTENT=2;url=AddCommodity.php>'; 
} 
  

?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
