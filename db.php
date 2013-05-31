<?php
	
	$db_addr = "localhost";
	$db_username = "root";
	$db_password = "b2";
	$db_dbname = "lckung_pro";
	@session_start();

	if(!@mysql_connect($db_addr, $db_username, $db_password))
        die("無法對資料庫連線");

	//資料庫連線採UTF8
	mysql_query("SET NAMES utf8");

	//選擇資料庫
	if(!@mysql_select_db($db_dbname))
	        die("無法使用資料庫");

?>