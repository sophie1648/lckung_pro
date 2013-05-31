<?php
    include '../session.php';
	include '../db.php';
?>

<head>
<title>商店電話</title>
</head>



<p>
  <input type="button" value="新增" onClick="self.location.href='AddTel.php'"/>
</p>
<p>
  <input type="button" value="刪除" onClick="self.location.href='DeleteTel.php'"/>
  
</p>
<P>
<?php 
    echo '<a href="../index.php">返回</a>'; 
?>
</body>
</html>
