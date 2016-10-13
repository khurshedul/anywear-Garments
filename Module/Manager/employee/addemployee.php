<?php
include_once('../main.php');
$dept=mysql_query("SELECT name FROM department");


?>

<html>

<title>Add New Employee</title>

<center>
<h1>Please Insert Information</h1>
<form action="insert.php" method="post">
Employee ID:<input type="text" name="myid" required/><br/><br/>
Employee Name:<input type="text" name="myname" required/><br/><br/>
Employee Password<input type="text" name="mypassword" required/><br/><br/>
Employee Address:<input type="text" name="myaddress" /><br/><br/>
Employee Designation:<input type="text" name="mydesignation" /><br/><br/>
Employee Phone number:<input type="text" name="myphone" /><br/><br/>
Employee Joining date:<input type="date" name="myjoin" /><br/><br/>
Employee Salary:<input type="text" name="mysalary" required/><br/><br/>
Employee Department:<select name="mydepartment" selected="selected"><br/>
<?php

while($r=mysql_fetch_array($dept))
{
echo '<option value="',$r['name'],'">',$r['name'],'</option>';


}
?>
</select>
<br/><br/>
<input type="submit" value="Save"/>
</form>

</html>