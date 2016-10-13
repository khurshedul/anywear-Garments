<?php

include_once('../main.php');
$res=mysql_query("SELECT  * FROM $tbl_employee WHERE id='$check' ");
$result=mysql_fetch_array($res);
$myid=$result[0];
$myname=$result[1];
$myaddress=$result[3];
$mydesignation=$result[4];
$myphone_number=$result[5];
$myjoindate=$result[6];
$mysalary=$result[7];
$mydepartment=$result[8];


?>
<html>
<title>My Profile</title>
<center>
<h1><?php  echo $myid;?> profile </h1>
<table border="1">
<tr>
<th>my id</th>
<th>my name</th>
<th>my address</th>
<th>my designation</th>
<th>my phone_number</th>
<th>my joining_date</th>
<th>my salary</th>
<th>my department</th>

</tr>
<td><?php  echo $myid;?></td>
<td><?php  echo $myname;?></td>
<td><?php  echo $myaddress;?></td>
<td><?php  echo $mydesignation;?></td>
<td><?php  echo $myphone_number;?></td>
<td><?php  echo $myjoindate;?></td>
<td><?php  echo $mysalary;?></td>
<td><?php  echo $mydepartment;?></td>
</table>
<br/>

</center>
</html>