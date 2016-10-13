<?php
include_once('../main.php');


$save="insert into department(id,name) values('$_POST[myid]','$_POST[myname]')";
 mysql_query($save);
 
?>
<html>
 <center>
 <h4>New Department Added Successfully</h4>
  <p>go home page.click Home button.<p>
 </center>
</html>