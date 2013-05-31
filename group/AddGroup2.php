<?php
    include '../session.php';
    include '../db.php';
        
        
$BranchID = $_POST['BranchID']; 
$GroupID = $_POST['GroupID']; 
$GroupBranchID = $_POST['GroupBranchID']; 

//判斷帳號密碼是否為空值 
//確認密碼輸入的正確性 
if($BranchID != null && $GroupID != null && $GroupBranchID != null) 
{ 
        $valid = "SELECT * FROM `group` WHERE BranchID = 'BranchID'AND GroupID = '$GroupID'AND GroupBranchID = 'GroupBranchID' ;" ; 
        $valid2 = mysql_query($valid) ; 
        if ($same = mysql_fetch_row($valid2)) 
        { 
            echo "此組群組設定已存在，請重新輸入"; 
            echo '<meta http-equiv=REFRESH CONTENT=2;url=AddGroup.php>'; 
            //header ("Location:register.php?err=1") ; 
        } 
        else
        { 
            //新增資料進資料庫語法 

            $sql = "INSERT into `group` (BranchID, GroupID, GroupBranchID) VALUES ('$BranchID', '$GroupID', '$GroupBranchID') "; 
            if(mysql_query($sql)) 
            { 
                echo '新增成功!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url=AddGroup.php>'; 
            } 
            else
            { 
                echo '新增失敗......!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url=AddGroup.php>'; 
            } 
        } 
} 
else
{ 
        echo '資料輸入錯誤，請重輸入!'; 
        echo '<meta http-equiv=REFRESH CONTENT=2;url=AddGroup.php>'; 
} 
  



?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
