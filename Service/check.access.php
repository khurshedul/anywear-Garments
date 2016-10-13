<?php
 session_start();
    
$host="localhost"; 
$username="root";
$password=""; 
$db_name="anywear"; 
$tbl_manager="manager"; 
$tbl_employee="employee";


mysql_connect("$host","$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");


$myid=$_POST['myid'];
$mypassword=$_POST['mypassword'];


$myid = stripslashes($myid);
$mypassword = stripslashes($mypassword);
$myid= mysql_real_escape_string($myid);
$mypassword = mysql_real_escape_string($mypassword);

$_SESSION['login_access']=$myid;

$sql_emp="SELECT * FROM $tbl_employee WHERE id='$myid' and password='$mypassword'";
$result=mysql_query($sql_emp);




$count_emp=mysql_num_rows($result);

$sql_manager="SELECT * FROM $tbl_manager WHERE id='$myid' and password='$mypassword'";
$resultm=mysql_query($sql_manager);

$count_manager=mysql_num_rows($resultm);

if($count_emp==1){



header("Location:../Module/Employee");
}

else if($count_manager==1){
	


header("Location:../Module/Manager");

}

else  {



header("Location:../index.php?login=101");



}
?>