<?php
	include '../session.php';
	include '../db.php';
	$BranchIDOrigin = $_POST["BranchID"];
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改商店資訊</title>
</head>

<body>


<FORM action="ModifyBranch2.php" method="post"> 
<?php
	$display = "SELECT CommodityID, CommodityName, CommodityIntro, CommodityPrice,CommoditySupplier, BigCategory, MediumCategory, SmallCategory
	            FROM  `commodity` 
				WHERE  CommodityID = '$CommodityIDOrigin'";
	$done = mysql_query($display) ;
	$item = mysql_fetch_row($done);
?>

<table>  
     <tr><td>商店編號: <?php  echo "<INPUT type='text' name='BranchID' size='20' value='$item[0]'>";  ?><P></td></tr> 
     <tr><td>商店名稱: <?php  echo "<INPUT type='text' name='BranchName' size='20' value='$item[1]'>"; ?><P></td></tr>
     <tr><td>商店郵遞區號:<?php  echo "<INPUT type='text' name='BranchZipCode' size='20' value='$item[2]'>"; ?> <P></td></tr>
     <tr><td>商店地址（城市）：<?php  echo " <INPUT type='text' name='BranchAddrCity' size='20' value='$item[3]'>";?> <P></td></tr>     
     <tr><td>商店地址（除城市）： <?php  echo "<INPUT type='text' name='BranchAddrLeft' size='20' value='$item[0]'>";?> <P></td></tr> 
     <tr><td>商店電子信箱： <?php  echo "<INPUT type='text' name='BranchEmail' size='20' value='$item[0]'>";?> <P></td></tr> 
     <tr><td>商店簡介： <?php  echo "<INPUT type='text' name='BranchIntro' size='20' value='$item[0]'>";?> <P></td></tr> 
     <tr><td>店長編號： <?php  echo "<INPUT type='text' name='Manager' size='20' value='$item[0]'>";?> <P></td></tr>      
</table>
<?php    
    echo "<input type='hidden' name='BranchIDOrigin' value='$BranchIDOrigin'>";
?>
    <input type="submit" value="提交"> 
    <input type="reset" value="重填"> 
</tr>
</FORM> 

</body>