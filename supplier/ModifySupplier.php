<?php
	include '../session.php';
	include '../db.php';
	
	$SupplierIDOrigin = $_POST["SupplierID"];
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改供應商資訊</title>
</head>

<body>


<FORM action="ModifySupplier2.php" method="post"> 
<?php
	$display = "SELECT SupplierID, SupplierName, SupplierTel, SupplierZipCode, SupplierAddr, SupplierEmail
	            FROM   supplier
				WHERE  SupplierID = '$SupplierIDOrigin'";
	$done = mysql_query($display) ;
	$item = mysql_fetch_row($done);
?>

<table>

    <tr><td>供應商編號： <?php  echo "<INPUT type='text' name='SupplierID' size='20' value='$item[0]'>"; ?><P></td></tr>
    <tr><td>供應商公司名稱： <?php  echo "<INPUT type='text' name='SupplierName' size='20' value='$item[1]'>"; ?><P></td></tr>
    <tr><td>供應商連絡電話： <?php  echo " <INPUT type='text' name='SupplierTel' size='20' value='$item[2]'>"; ?><P></td></tr>
    <tr><td>供應商郵遞區號： <?php  echo "<INPUT type='text' name='SupplierZipCode' size='20' value='$item[3]'>"; ?><P></td></tr>   
    <tr><td>供應商地址： <?php  echo "<INPUT type='text' name='SupplierAddr' size='100' value='$item[4]'>"; ?><P></td></tr>
    <tr><td>供應商電子信箱： <?php  echo "<INPUT type='text' name='SupplierEmail' size='30' value='$item[5]'>"; ?><P></td></tr>


</table>
<?php    
    echo "<input type='hidden' name='SupplierIDOrigin' value='$SupplierIDOrigin'>";
?>
    <input type="submit" value="提交"> 
    <input type="reset" value="重填"> 
</tr>
</FORM> 

</body>