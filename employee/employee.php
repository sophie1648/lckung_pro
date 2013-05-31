<?php
    include '../session.php';
    include '../db.php';
?>

<head>
<title>Untitled Document</title>
</head>

<body>
<p>
<FORM action="Addemployee.php" method="post"> 
<input type="submit" value="新增"> 
</FORM> 
<FORM action="ModiDelemployee.php" method="post"> 
<input type="submit" value="修改/刪除"> 
</FORM> 
</p>
<?php 

    echo '<a href="../index.php">返回</a>'; 
?> 
</body>
