<?php
    include '../session.php';
    include '../db.php';
		
$BranchID = $_POST['BranchID']; 
$BranchTel = $_POST['BranchTel']; 

  
  
//判斷帳號密碼是否為空值 
//確認密碼輸入的正確性 
if($BranchID != null && $BranchTel != null)
{ 
        $valid = "SELECT * 
		          FROM telephone 
				  WHERE BranchID = '$BranchID' and BranchTel = '$BranchTel';" ; 
        $valid2 = mysql_query($valid) ; 
        if ($same = mysql_fetch_row($valid2)) 
        { 
            echo "已有此電話，請重新輸入"; 
            echo '<meta http-equiv=REFRESH CONTENT=2;url=telephone.php>'; 
            //header ("Location:register.php?err=1") ; 
        } 
        else
        { 
            //新增資料進資料庫語法 

            $sql = "insert into telephone (BranchID,BranchTel) VALUES ('$BranchID','$BranchTel') "; 
            if(mysql_query($sql)) 
            { 
                echo '新增成功!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url=telephone.php>'; 
            } 
            else
            { 
                echo '新增失敗!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url=telephone.php>'; 
            } 
        } 
} 
else
{ 
        echo '資料輸入錯誤，請重輸入!'; 
        echo '<meta http-equiv=REFRESH CONTENT=2;url=AddTel.php>'; 
} 
  



?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <title>新增商店電話</title>