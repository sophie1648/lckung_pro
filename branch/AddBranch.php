<?php
    include '../session.php';
    include '../db.php';
?>

<head>
<title>Branch</title>
</head>

<body>

<form action="AddBranch2.php" method="post"> 
           商店編號:<INPUT type="text" name="BranchID" size="20"><P> 
           商店名稱:<INPUT type="text" name="BranchName" size="20"><P> 
       商店郵遞區號:<INPUT type="text" name="BranchZipCode" size="20"><P> 
      商店地址（城市）： <INPUT type="text" name="BranchAddrCity" size="20"><P>     
    商店地址（除城市）： <INPUT type="text" name="BranchAddrLeft" size="20"><P> 
        商店電子信箱： <INPUT type="text" name="BranchEmail" size="20"><P> 
           商店簡介： <INPUT type="text" name="BranchIntro" size="20"><P> 
           店長編號： <INPUT type="text" name="Manager" size="20"><P>
           商店電話: <INPUT type="text" name="BranchTel" size="20"><P>
    <input type="submit" value="提交"> 
    <input type="reset" value="重填"> 
</form> 

<a href="branch.php">返回</a>
 
</body>

