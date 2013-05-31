<?php
    include '../session.php';
	include '../db.php';
?>

<head>
<title>刪除商店電話</title>
</head>

<body>

<?php

    $BranchIDOrigin = $_POST["BranchID"];
	
	$count = "SELECT COUNT(BranchID)
	          FROM  telephone 
			  WHERE BranchID = '$BranchIDOrigin'";
			  
	$count2 = mysql_query($count);
	$count3 = mysql_fetch_row($count2);
	
	
	if($count3[0] =='1')
	{
	    echo '該商店只有一支電話號碼，不能刪除!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=telephone.php>';
	} 
	else if($count3[0] =='0')
	{
	    echo '該商店不存在!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=telephone.php>'; 
	}
	else
	{
        $display = "SELECT BranchTel FROM  `telephone` WHERE BranchID = '$BranchIDOrigin'";
	
        $done = mysql_query($display) ;
	
     	echo "<p>";
     	echo "<table border='1'> " ;     
        echo "<tr>" ;
	    echo "<tr><td>商店電話</td><td>刪除</td></tr>" ;
	
          	while ($item = mysql_fetch_row($done))     
     	{
		
     		echo "<form method='post' action='DeleteTel3.php'>";
     		echo "<tr>" ;
     		echo "<td>".$item[0]."</td>";
		
	     	//echo "<td><input type='radio' name=verify value='1' checked>刪除";
		     echo "<td><input type='submit' value='送出'></td>";
     		echo "<input type='hidden' name='BranchTel' value='$item[0]'>";
     		echo "</td></tr></form>" ;		
     	}
	     echo "</table>";
         echo '<a href="DeleteTel.php">返回</a>'; 
	}
?>
 