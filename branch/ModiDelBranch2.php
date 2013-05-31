<?php
	include '../session.php';
    include '../db.php';
	$BranchIDOrigin = $_POST["BranchID"];
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商店資訊</title>
</head>

<body>
<FORM action="ModifyBranch2.php" method="post"> 
<?php
	$display = "SELECT BranchID, BranchName, BranchZipCode,BranchAddrCity ,BranchAddrLeft,BranchEmail ,BranchIntro, Manager
	            FROM   branch 
				WHERE  BranchID = '$BranchIDOrigin'";
	$done = mysql_query($display) ;
if($item = mysql_fetch_row($done))
{
	echo "<table>";
    echo "<tr><td>商店編號：<INPUT type='text' name='BranchID' size='20' value='$item[0]'> <P></td></tr>";
    echo "<tr><td>商店名稱：<INPUT type='text' name='BranchName' size='20' value='$item[1]'><P></td></tr>";
    echo"<tr><td>商店郵遞區號： <INPUT type='text' name='BranchZipCode' size='20' value='$item[2]'><P></td></tr>";
    echo "<tr><td>商店地址（城市）：<INPUT type='text' name='BranchAddrCity' size='20' value='$item[3]'><P></td></tr>";   
    echo "<tr><td>商店地址（除城市）：<INPUT type='text' name='BranchAddrLeft' size='20' value='$item[4]'><P></td></tr>"; 
    echo "<tr><td>商店電子信箱：<INPUT type='text' name='BranchEmail' size='20' value='$item[5]'><P></td></tr>";
    echo "<tr><td>商店簡介：<INPUT type='text' name='BranchIntro' size='20' value='$item[6]'><P></td></tr>"; 
    echo "<tr><td>店長編號：<INPUT type='text' name='Manager' size='20' value='$item[7]'><P></td></tr>";
    echo "</table>"  ;
    echo "<input type='hidden' name='BranchIDOrigin' value='$BranchIDOrigin'>";

    echo "<input type='submit' value='修改送出'> ";
    echo "<input type='reset' value='重填'> ";
    echo "</tr>";
    echo "</FORM>";

    echo "<form action='DeleteBranch.php' method='post'>" ;
    echo "<input type='hidden' name='BranchID' value='$BranchIDOrigin'>";

    echo "<input type='submit' value='刪除'> ";
	echo "</form>"; 
}
else
{
     echo '沒有此項商店!';
     echo '<meta http-equiv=REFRESH CONTENT=2;url=branch.php>';

}
?>
</body>

</html>