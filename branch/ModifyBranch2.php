<title>修改商店資訊</title><?php
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

$BranchIDOrigin = $_POST['BranchIDOrigin'];   
  

//判斷帳號密碼是否為空值 
//確認密碼輸入的正確性 
if($BranchID != null && $BranchName != null && $BranchZipCode != null  && $BranchAddrCity != null && $BranchAddrLeft != null && $BranchEmail != null && $Manager != null)
{ 
        $update="UPDATE `branch`
		    	 SET BranchID = '$BranchID',
				     BranchName = '$BranchName',
					 BranchZipCode = '$BranchZipCode',
					 BranchAddrCity = '$BranchAddrCity',
					 BranchAddrLeft = '$BranchAddrLeft',
					 BranchEmail  = '$BranchEmail ',
					 BranchIntro = '$BranchIntro',
					 Manager = '$Manager'
				 where BranchID ='$BranchIDOrigin'";
            if(mysql_query($update)) 
            { 
                echo '修改成功!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url=branch.php>'; 
            } 
            else
            { 
                echo '修改失敗!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url=branch.php>'; 
            } 
}
else 
{
                echo '修改失敗!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url=branch.php>'; 
}
?>

