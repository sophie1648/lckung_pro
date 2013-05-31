<?php
    include '../session.php';
    include '../db.php';
?>

<head>
<title>Untitled Document</title>
</head>

<body>
<p>
<b>新增</b>
<FORM action="AddEmployee2.php" method="post"> 
    員工編號： <INPUT type="text" name="EmployeeID" size="20"><P> 
    員工姓名： <INPUT type="text" name="EmployeeName" size="20"><P> 
    員工職位： <INPUT type="text" name="EmployeePosition" size="20"><P> 
    員工性別： <INPUT type="text" name="EmployeeGender" size="2"><P>     
    員工郵遞區號： <INPUT type="text" name="EmployeeZipCode" size="20"><P> 
    員工通訊地址（城市）： <INPUT type="text" name="EmployeeAddrCity" size="20"><P> 
    員工通訊地址（除城市）： <INPUT type="text" name=" EmployeeAddrLeft" size="100"><P> 
    員工連絡電話： <INPUT type="text" name="EmployeeTel" size="20"><P> 
    員工電子信箱： <INPUT type="text" name="EmployeeEmail" size="30"><P> 
    員工出生年月日： <INPUT type="text" name="EmployeeBirth" size="15"><P> 
    所屬分店編號： <INPUT type="text" name="BranchID" size="20"><P> 
    <input type="submit" value="提交"> 
    <input type="reset" value="重填"> 
</FORM> 

<a href="employee.php">返回</a>
 
</body>


