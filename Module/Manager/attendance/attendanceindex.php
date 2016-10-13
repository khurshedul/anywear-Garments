<?php
include_once('../main.php');
$dept=mysql_query("SELECT name FROM department");


?>

<html>

<title>Attendance Department Wise</title>

<center>
<h1>Please Select Department To Make All Staff Attendance</h1>
<form action="attendance.php" method="post">
Select Department:<select name="mydepartment" selected="selected"><br/>
<?php

while($r=mysql_fetch_array($dept))
{
echo '<option value="',$r['name'],'">',$r['name'],'</option>';


}
?>
</select>

<input type="submit" value="Make Attendance"/>
</form>

</html>