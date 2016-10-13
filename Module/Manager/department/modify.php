<?php
include_once('../main.php');
$dept=mysql_query("SELECT id,name FROM department where name='$_POST[mydepartment]'");
$res=mysql_fetch_array($dept);

?>

<html>

<title>Modify Department</title>
<a href="../"><button>Home</button></a>
<center>
<h1>Please Insert Information</h1>
<form action="update.php" method="post">
Department ID:<input type="text" name="myid" value="<?php echo $res[0];?>" $required/><br/><br/>
<input type="hidden" name="preid" value="<?php echo $res[0];?>"/>
Department Name:<input type="text" name="myname"  value="<?php echo $res[1];?>" required/><br/><br/>

<input type="submit" value="Save"/>
</html>