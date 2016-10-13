<?php
include_once('../main.php');


$save="UPDATE department SET id='$_POST[myid]',name='$_POST[myname]' WHERE id='$_POST[preid]'";
 mysql_query($save);

?>
<html>
 <center>
 <h4>Department Updated Successfully</h4>
  <p>go home page.click Home button.<p>
 </center>
</html>