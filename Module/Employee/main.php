<?php


$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="anywear";
$tbl_employee="employee"; 





$link =mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
session_start();
$check=$_SESSION['login_access'];
$session=mysql_query("SELECT name  FROM $tbl_employee WHERE id='$check' ");
$row=mysql_fetch_array($session);
$login_session=$row['name'];

if(!isset($login_session))
{
header("Location:../../");
}

?>
<html>
<center>
<img src="logo.jpg" alt="ANYWEAR"/>
		
		<h3>Welcome <?php echo $check;?> (you are in Employee mode )</h3>
		<br/>
		<a href="../"><button>Home</button></a>
		</center>
        <hr/>
</html>