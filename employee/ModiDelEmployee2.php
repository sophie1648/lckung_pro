<?php
	include '../session.php';
    include '../db.php';
	
	$EmployeeIDOrigin = $_POST["EmployeeID"];
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<FORM action="ModifyEmployee2.php" method="post"> 
<?php
	$display = "SELECT EmployeeID, EmployeeName, EmployeePosition, EmployeeGender, EmployeeZipCode, EmployeeAddrCity, EmployeeAddrLeft, EmployeeTel,EmployeeEmail,EmployeeBirth,BranchID
	            FROM   employee 
				WHERE  EmployeeID = '$EmployeeIDOrigin'";
	$done = mysql_query($display) ;
if($item = mysql_fetch_row($done))
{
	echo "<table>";
    echo "<tr><td>員工編號：<INPUT type='text' name='EmployeeID' size='20' value='$item[0]'> <P></td></tr>";
    echo "<tr><td>員工姓名：<INPUT type='text' name='EmployeeName' size='20' value='$item[1]'><P></td></tr>";
    echo"<tr><td>員工職位： <INPUT type='text' name='EmployeePosition' size='20' value='$item[2]'><P></td></tr>";
    echo "<tr><td>員工性別：<INPUT type='text' name='EmployeeGender' size='2' value='$item[3]'><P></td></tr>";   
    echo "<tr><td>員工郵遞區號：<INPUT type='text' name='EmployeeZipCode' size='20' value='$item[4]'><P></td></tr>"; 
    echo "<tr><td>員工通訊地址（城市）：<INPUT type='text' name='EmployeeAddrCity' size='20' value='$item[5]'><P></td></tr>";
    echo "<tr><td>員工通訊地址（除城市）：<INPUT type='text' name='EmployeeAddrLeft' size='100' value='$item[6]'><P></td></tr>"; 
    echo "<tr><td>員工連絡電話：<INPUT type='text' name='EmployeeTel' size='20' value='$item[7]'><P></td></tr>";
    echo "<tr><td>員工電子信箱：<INPUT type='text' name='EmployeeEmail' size='30' value='$item[8]'><P></td></tr>";
    echo "<tr><td>員工出生年月日：<INPUT type='text' name='EmployeeBirth' size='15' value='$item[9]'><P></td></tr>";
    echo "<tr><td>所屬分店編號：<INPUT type='text' name='BranchID' size='20' value='$item[10]'><P></td></tr>";
    echo "</table>"  ;
    echo "<input type='hidden' name='EmployeeIDOrigin' value='$EmployeeIDOrigin'>";





    echo "<input type='submit' value='修改送出'> ";
    echo "<input type='reset' value='重填'> ";
    echo "</tr>";
    echo "</FORM>";

    echo "<FORM action='DeleteEmployee.php' method='post'>" ;
    echo "<input type='hidden' name='EmployeeID' value='$EmployeeIDOrigin'>";

    echo "<input type='submit' value='刪除'> ";
	echo "</FORM>"; 
}
else
{
     echo '沒有此位員工!';
     echo '<meta http-equiv=REFRESH CONTENT=2;url=employee.php>';

}
?>
</body>

</html>