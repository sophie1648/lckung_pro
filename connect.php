<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../public/stylesheets/connect.css" media="screen" />
<?php
	include 'session.php';
	include 'db.php';

	$id = $_POST['id'];
	$pw = $_POST['pw'];

	//搜尋資料庫資料
	$sql = " SELECT * FROM account where Account = '$id' ";
	$result = mysql_query($sql);
	$row = @mysql_fetch_row($result);

	//判斷帳號與密碼是否為空白
	//以及MySQL資料庫裡是否有這個會員
	if($id != null && $pw != null && $row[0] == $id && $row[1] == $pw)
	{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['id'] = $id;
        echo "<center><div class='login'>登入成功!</div></center>";
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
	}
	else
	{
        echo '登入失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
	}
?>