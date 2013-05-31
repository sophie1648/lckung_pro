<?php
	include '../session.php';
    include '../db.php';
	
	$SupplierIDOrigin = $_POST["SupplierID"];
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<FORM action="ModifySupplier2.php" method="post"> 
<?php
	$display = "SELECT SupplierID, SupplierName, SupplierTel, SupplierZipCode, SupplierAddr, SupplierEmail
	            FROM   supplier 
				WHERE  SupplierID = '$SupplierIDOrigin'";
	$done = mysql_query($display) ;
if($item = mysql_fetch_row($done))
{
	echo "<table>";
    echo "<tr><td>供應商編號：<INPUT type='text' name='SupplierID' size='20' value='$item[0]'> <P></td></tr>";
    echo "<tr><td>供應商公司名稱：<INPUT type='text' name='SupplierName' size='20' value='$item[1]'><P></td></tr>";
    echo"<tr><td>供應商連絡電話： <INPUT type='text' name='SupplierTel' size='20' value='$item[2]'><P></td></tr>";
    echo "<tr><td>供應商郵遞區號：<INPUT type='text' name='SupplierZipCode' size='20' value='$item[3]'><P></td></tr>";   
    echo "<tr><td>供應商地址：<INPUT type='text' name='SupplierAddr' size='100' value='$item[4]'><P></td></tr>"; 
    echo "<tr><td>供應商電子信箱：<INPUT type='text' name='SupplierEmail' size='30' value='$item[5]'><P></td></tr>";

    echo "</table>"  ;
    echo "<input type='hidden' name='SupplierIDOrigin' value='$SupplierIDOrigin'>";

    echo "<input type='submit' value='修改送出'> ";
    echo "<input type='reset' value='重填'> ";
    echo "</tr>";
    echo "</FORM>";

    echo "<FORM action='DeleteSupplier.php' method='post'>" ;
    echo "<input type='hidden' name='SupplierIDOrigin' value='$SupplierIDOrigin'>";

    echo "<input type='submit' value='刪除'> ";
	echo "</FORM>"; 
}
else
{
     echo '沒有此間供應商!';
     echo '<meta http-equiv=REFRESH CONTENT=2;url=supplier.php>';

}
?>
</body>

</html>