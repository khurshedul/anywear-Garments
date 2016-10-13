<?php
include_once('../main.php');



?>

<html>

<title>Add New Department</title>

<center>
<h1>Please Insert Information</h1>
<form action="insert.php" method="post">
Department ID:<input type="text" name="myid" required/><br/><br/>
Department Name:<input type="text" name="myname" required/><br/><br/>

<input type="submit" value="Save"/>
</form>

</html>