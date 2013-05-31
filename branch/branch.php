<?php
    include '../session.php';
	include '../db.php';
?>

<head>
<title>商店資訊</title>
</head>


<p>
  <input type="button" value="新增" onClick="self.location.href='AddBranch.php'"/>
</p>
<p>
  <input type="button" value="修改/刪除" onClick="self.location.href='ModiDelBranch.php'"/>
  
</p>
<P>
<?php 
    echo '<a href="../index.php">返回</a>'; 
?>
</body>
</html>