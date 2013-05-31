<?php
	include '../session.php';
    include '../db.php';
	
	$BranchIDOrigin = $_POST["BranchID"];
    $CommodityIDOrigin = $_POST["CommodityID"];
    $GroupIDOrigin = $_POST["GroupID"];
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改隱私設定</title>
</head>

<body>


<form action="ModifyPrivacy2.php" method="post"> 
<?php
	$display = "SELECT BranchID, CommodityID, GroupID
	            FROM  `privacy` 
				WHERE  BranchID = '$BranchIDOrigin' AND CommodityID = 
				'$CommodityIDOrigin'AND GroupID = '$GroupIDOrigin'";

	$done = mysql_query($display) ;
	$item = mysql_fetch_row($done);
?>

<table>
      echo "<tr><td>商店編號：<INPUT type='text' name='BranchID' size='20' value='$item[0]'> <P></td></tr>";
      echo "<tr><td>商品編號：<INPUT type='text' name='CommodityID' size='20' value='$item[1]'><P></td></tr>";
      echo "<tr><td>群組編號：<INPUT type='text' name='GroupID' size='20' value='$item[2]'> <P></td></tr>";

</table>
<?php    
    echo "<input type='hidden' name='BranchIDOrigin' value='$BranchIDOrigin'>";
    echo "<input type='hidden' name='CommodityIDOrigin' value='$CommodityIDOrigin'>";
    echo "<input type='hidden' name='GroupIDOrigin' value='$GroupIDOrigin'>";

?>
    <input type="submit" value="提交"> 
    <input type="reset" value="重填"> 
</tr>
</form> 

</body>