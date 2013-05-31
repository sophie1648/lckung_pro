<?php
    include '../session.php';
    include '../db.php';
		
		
$BranchID = $_POST['BranchID']; 
$GroupID = $_POST['GroupID']; 
$GroupBranchID = $_POST['GroupBranchID']; 

 	$BranchIDOrigin = $_POST["BranchIDOrigin"];
    $GroupIDOrigin = $_POST["GroupIDOrigin"];
    $GroupBranchIDOrigin = $_POST["GroupBranchIDOrigin"]; 

//判斷帳號密碼是否為空值 
//確認密碼輸入的正確性 
if($BranchID != null && $GroupID != null && $GroupBranchID != null) 
{ 
        $update="UPDATE `group`
		    	 SET BranchID = '$BranchID',
				     GroupID = '$GroupID',
					 GroupBranchID = '$GroupBranchID'
				
				 where BranchID = '$BranchIDOrigin' AND GroupID = '$GroupIDOrigin'AND GroupBranchID = '$GroupBranchIDOrigin'";
            if(mysql_query($update)) 
            { 
                echo '修改成功!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url=group.php>'; 
            } 
            else
            { 
                echo '修改失敗!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url=group.php>'; 
            } 
}
else 
{
                echo '修改失敗!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url= group.php>'; 
}
?>

