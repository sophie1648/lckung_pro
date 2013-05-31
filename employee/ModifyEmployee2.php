<?php
    include '../session.php';
    include '../db.php';
		
		
$EmployeeID = $_POST['EmployeeID']; 
$EmployeeName = $_POST['EmployeeName']; 
$EmployeePosition = $_POST['EmployeePosition']; 
$EmployeeGender = $_POST['EmployeeGender']; 
$EmployeeZipCode = $_POST['EmployeeZipCode']; 
$EmployeeAddrCity = $_POST['EmployeeAddrCity']; 
$EmployeeAddrLeft = $_POST['EmployeeAddrLeft']; 
$EmployeeTel = $_POST['EmployeeTel']; 
$EmployeeEmail = $_POST['EmployeeEmail']; 
$EmployeeBirth = $_POST['EmployeeBirth']; 
$BranchID = $_POST['BranchID']; 


$EmployeeIDOrigin = $_POST['EmployeeIDOrigin'];   
  

//判斷帳號密碼是否為空值 
//確認密碼輸入的正確性 
if($EmployeeID != null && $EmployeeName != null && $EmployeePosition != null  && $EmployeeGender != null && $EmployeeZipCode != null && $EmployeeAddrCity != null && $EmployeeAddrLeft != null && $EmployeeTel != null && $EmployeeBirth != null && $BranchID != null ) 
{ 
        $update="UPDATE employee
		    	 SET  EmployeeID =   '$EmployeeID',
					  EmployeeName = '$EmployeeName',
					  EmployeePosition = '$EmployeePosition',
					  EmployeeGender = '$EmployeeGender',
					  EmployeeZipcode = '$EmployeeZipCode',
					  EmployeeAddrCity = '$EmployeeAddrCity',
					  EmployeeAddrLeft = '$EmployeeAddrLeft',
					  EmployeeTel = '$EmployeeTel',
					  EmployeeEmail = '$EmployeeEmail',
					  EmployeeBirth = '$EmployeeBirth',
					  BranchID = '$BranchID'

				 where EmployeeID ='$EmployeeIDOrigin'";
            if(mysql_query($update)) 
            { 
                echo '修改成功!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url=employee.php>'; 
            } 
            else
            { 
                echo '修改失敗!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url=employee.php>'; 
            } 
}
else 
{
                echo '修改失敗!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url=employee.php>'; 
}
?>

