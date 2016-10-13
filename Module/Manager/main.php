<?php
session_start();
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="anywear"; 
$tbl_manager="manager"; 





$link=mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$check=$_SESSION['login_access'];
$session=mysql_query("SELECT name FROM $tbl_manager WHERE id='$check' ");
$row12=mysql_fetch_array($session);
$login_session=$row12['name'];

if(!isset($login_session))
{
	
header("Location:../../");
}

?>
<html>
<center>
<img src="logo.jpg" alt="ANYWEAR"/>
		
		<h3>Welcome <?php echo $check;?> (you are in Admin mode )</h3>
		<br/>
		<a href="../"><button>Home</button></a>
		</center>
        <hr/>
</html>