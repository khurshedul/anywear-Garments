<?php


$login_code= isset($_REQUEST['login']) ? $_REQUEST['login'] : '1';

if($login_code==101)
{
	$login_message="Wrong Credentials !";
	$color="red";
}
else
{
	$login_message="Please Login !";
	$color="green";
}

?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>ANYWEAR Graments</title>
    
</head>

  <body>

    
	<center>
	
	<img src="source/logo.jpg" />

	
	<hr/>
     <?php echo "<font size='4' color='$color'>$login_message</font>";
	 ?>
   
    <form  action="Service/check.access.php" method="post"><br/>
      <input type="text" name="myid" placeholder="your id" autofocus=""  required /><br/><br/><br/>
      <input type="password" name="mypassword" placeholder="your password"  required/><br/><br/><br/>
       <input type="submit" value="login" />
	  
 
    </form>
	
  
</center>
  
</body>
</html>
