<?php
	include '../session.php';
    include '../db.php';
	
	$BranchIDOrigin = $_POST["BranchID"];
    $GroupIDOrigin = $_POST["GroupID"];
    $GroupBranchIDOrigin = $_POST["GroupBranchID"];

?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<FORM action="ModifyGroup2.php" method="post"> 
<?php
	$display = "SELECT BranchID, GroupID, GroupBranchID 
	            FROM   `group` 
				WHERE  BranchID = '$BranchIDOrigin'AND GroupID = '$GroupIDOrigin'AND GroupBranchID = '$GroupBranchIDOrigin'";
	$done = mysql_query($display) ;
if($item = mysql_fetch_row($done))
{
	echo "<table>";
    echo "<tr><td>商店編號：<INPUT type='text' name='BranchID' size='20' value='$item[0]'> <P></td></tr>";
    echo "<tr><td>群組編號：<INPUT type='text' name='GroupID' size='20' value='$item[1]'><P></td></tr>";
    echo "<tr><td>在群組的商店編號：<INPUT type='text' name='GroupBranchID' size='20' value='$item[2]'> <P></td></tr>";

    echo "</table>"  ;
    echo "<input type='hidden' name='BranchIDOrigin' value='$BranchIDOrigin'>";
    echo "<input type='hidden' name='GroupIDOrigin' value='$GroupIDOrigin'>";
    echo "<input type='hidden' name='GroupBranchIDOrigin' value='$GroupBranchIDOrigin'>";

    echo "<input type='submit' value='修改送出'> ";
    echo "<input type='reset' value='重填'> ";
    echo "</tr>";
    echo "</FORM>";

    echo "<FORM action='DeleteGroup.php' method='post'>" ;
    echo "<input type='hidden' name='BranchID' value='$BranchIDOrigin'>";
    echo "<input type='hidden' name='GroupID' value='$GroupIDOrigin'>";
    echo "<input type='hidden' name='GroupBranchID' value='$GroupBranchIDOrigin'>";

    echo "<input type='submit' value='刪除'> ";
	echo "</FORM>"; 
}
else
{
     echo '沒有此群組設定!';
     echo '<meta http-equiv=REFRESH CONTENT=2;url=group.php>';

}
?>
</body>

</html>