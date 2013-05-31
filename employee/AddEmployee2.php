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



  
//判斷帳號密碼是否為空值 
//確認密碼輸入的正確性 
if($EmployeeID != null && $EmployeeName != null && $EmployeePosition != null  && $EmployeeGender != null && $EmployeeZipCode != null && $EmployeeAddrCity != null && $EmployeeAddrLeft != null && $EmployeeTel != null && $EmployeeBirth != null && $BranchID != null ) 
{ 
        $valid = "SELECT * FROM employee WHERE EmployeeID = '$EmployeeID';" ; 
        $valid2 = mysql_query($valid) ; 
        if ($same = mysql_fetch_row($valid2)) 
        { 
            echo "重複，請重新輸入"; 
            echo '<meta http-equiv=REFRESH CONTENT=2;url=AddEmployee.php>'; 
            //header ("Location:register.php?err=1") ; 
        } 
        else
        { 
            //新增資料進資料庫語法 

            $sql = "insert into employee (EmployeeID, EmployeeName, EmployeePosition, EmployeeGender, EmployeeZipCode, EmployeeAddrCity, EmployeeAddrLeft, EmployeeTel, EmployeeEmail, EmployeeBirth, BranchID) VALUES ('$EmployeeID', '$EmployeeName', '$EmployeePosition', '$EmployeeGender', '$EmployeeZipCode', '$EmployeeAddrCity', '$EmployeeAddrLeft', '$EmployeeTel', '$EmployeeEmail', '$EmployeeBirth', '$BranchID') "; 
            if(mysql_query($sql)) 
            { 
                echo '新增成功!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url=AddEmployee.php>'; 
            } 
            else
            { 
                echo '新增失敗!'; 
                echo '<meta http-equiv=REFRESH CONTENT=2;url=AddEmployee.php>'; 
            } 
        } 
} 
else
{ 
        echo '資料輸入錯誤，請重輸入!'; 
        echo '<meta http-equiv=REFRESH CONTENT=2;url=AddEmployee.php>'; 
} 
  



?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
