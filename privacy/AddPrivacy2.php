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
        $valid = "SELECT * FROM privacy WHERE BranchID = 'BranchID'AND CommodityID = '$CommodityID'AND GroupID = 'GroupID' ;" ; 
        $valid2 = mysql_query($valid) ; 
        if ($same = mysql_fetch_row($valid2)) 
        { 
            echo "此組隱私設定已存在，請重新輸入"; 
            echo '<meta http-equiv=REFRESH CONTENT=2;url=AddPrivacy.php>'; 
            //header ("Location:register.php?err=1") ; 
        } 
        else
        { 
            //新增資料進資料庫語法 

            $sql = "INSERT into privacy (BranchID, CommodityID, GroupID) VALUES ('$BranchID', '$CommodityID', '$GroupID') "; 
            if(mysql_query($sql)) 
            { 
                echo '新增成功!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url=AddPrivacy.php>'; 
            } 
            else
            { 
                echo '新增失敗!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url=AddPrivacy.php>'; 
            } 
        } 
} 
else
{ 
        echo '資料輸入錯誤，請重輸入!'; 
        echo '<meta http-equiv=REFRESH CONTENT=2;url=AddPrivacy.php>'; 
} 
  



?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
