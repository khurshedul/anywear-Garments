<?php
include_once('../main.php');
$dept=mysql_query("SELECT name FROM department");


?>

<html>

<title>Modify Department</title>

<center>
<h1>Please Select Department To Modify</h1>
<form action="modify.php" method="post">
Select Department:<select name="mydepartment" selected="selected"><br/>
<?php

while($r=mysql_fetch_array($dept))
{
echo '<option value="',$r['name'],'">',$r['name'],'</option>';


}
?>
</select>

<input type="submit" value="Select"/>
</form>

</html>