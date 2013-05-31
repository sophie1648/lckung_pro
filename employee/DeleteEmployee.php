<?php
	session_start(); 
	if (!isset($_SESSION))
		session_start() ;
		
	if (!isset($_SESSION['account']))
		header ("Location:index.php?nologin=1") ;
    
	include("mysql_connect.inc.php"); 

?>

<?php
	
	$EmployeeIDOrigin = $_POST["EmployeeID"];

        $sql = "delete from employee 
		         where EmployeeID='$EmployeeIDOrigin'";
        if(mysql_query($sql))
        {
                echo '刪除成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=employee.php>';
        }
        else
        {
                echo '刪除失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=employee.php>';
        }
?>