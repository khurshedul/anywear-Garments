<?php
include_once('../main.php');
$dept=mysql_query("SELECT id FROM employee");


?>

<html>

<title>Modify Employee Information</title>

<center>
<h1>Please Select Employee To Modify</h1>
<form action="modifyemployee.php" method="post">
Select Employee:<select name="eid" selected="selected"><br/>
<?php

while($r=mysql_fetch_array($dept))
{
echo '<option value="',$r['id'],'">',$r['id'],'</option>';


}
?>
</select>

<input type="submit" value="Select"/>
</form>

</html>