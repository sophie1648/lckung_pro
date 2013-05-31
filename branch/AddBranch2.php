<?php
    include '../session.php';
    include '../db.php';
		
		
$BranchID = $_POST['BranchID']; 
$BranchName = $_POST['BranchName']; 
$BranchZipCode = $_POST['BranchZipCode']; 
$BranchAddrCity = $_POST['BranchAddrCity']; 
$BranchAddrLeft = $_POST['BranchAddrLeft']; 
$BranchEmail = $_POST['BranchEmail']; 
$BranchIntro = $_POST['BranchIntro']; 
$Manager = $_POST['Manager'];
$BranchTel =  $_POST['BranchTel'];
  
  
//判斷帳號密碼是否為空值 
//確認密碼輸入的正確性 
if($BranchID != null && $BranchName != null && $BranchZipCode != null  && $BranchAddrCity != null && $BranchAddrLeft != null && $BranchEmail != null && $Manager != null && $BranchTel != null)
{ 
        $valid = "SELECT * FROM branch WHERE BranchID = '$BranchID';" ; 
        $valid2 = mysql_query($valid) ; 
        if ($same = mysql_fetch_row($valid2)) 
        { 
            echo "已有此商店，請重新輸入"; 
            echo '<meta http-equiv=REFRESH CONTENT=2;url=AddBranch.php>'; 
            //header ("Location:register.php?err=1") ; 
        } 
        else
        { 
            //新增資料進資料庫語法 

            $sql = "insert into branch (BranchID,BranchName, BranchZipCode, BranchAddrCity, BranchAddrLeft, BranchEmail , BranchIntro, Manager) VALUES ('$BranchID', '$BranchName', '$BranchZipCode', '$BranchAddrCity','$BranchAddrLeft','$BranchEmail', '$BranchIntro', '$Manager') ";
			$sql2 = "insert into telephone (BranchID,BranchTel) VALUES ('$BranchID','$BranchTel')"; 
            if(mysql_query($sql)) 
            {
			    mysql_query($sql2); 
                echo '新增成功!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url=AddBranch.php>'; 
            } 
            else
            { 
                echo '新增失敗!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url=AddBranch.php>'; 
            } 
        } 
} 
else
{ 
        echo '資料輸入錯誤，請重輸入!'; 
        echo '<meta http-equiv=REFRESH CONTENT=2;url=AddBranch.php>'; 
} 
  



?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
