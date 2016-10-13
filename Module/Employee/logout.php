<?php
include ('../../Source/mysqlclose.php');
session_start();
session_destroy();
mysql_close($link);

header("Location: ../../");
?>