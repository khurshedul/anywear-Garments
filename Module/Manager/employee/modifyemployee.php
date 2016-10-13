<?php
include_once('../main.php');
								$conn=mysql_connect('localhost','root','');
								      if(!$conn){
								         die('error connecting ');
								         }
								         mysql_select_db('anywear',$conn);


 
 
?>
 
<html>
 
<title>Modify Employee Information</title>

<center>
<h1>Please modify Information</h1>
<form action="save.php" method="post">
<?php
 $dept1=mysql_query("SELECT * FROM employee where id='$_POST[eid]'");
 $dept=mysql_query("SELECT name FROM department");
 
 while($r=mysql_fetch_array($dept1))
{

				echo "Employee ID:<input type='text' name='myid'  value='$r[0]'/><br/><br/>";
				echo "Employee Name:<input type='text' name='myname'  value='$r[1]'/><br/><br/>";
				echo "Employee Password<input type='text' name='mypassword'  value='$r[2]'/><br/><br/>";
				echo "Employee Address:<input type='text' name='myaddress' value='$r[3]'/><br/><br/>";
				echo "Employee Designation:<input type='text' name='mydesignation' value='$r[4]'/><br/><br/>";
				echo "Employee Phone number:<input type='text' name='myphone' value='$r[5]'/><br/><br/>";
				echo "Employee Joining date:<input type='date' name='myjoin' value='$r[6]' required/><br/><br/>";
				echo "Employee Salary:<input type='text' name='mysalary'  value='$r[7]'required/><br/><br/>";
				
				
				$editid=$r[0];
}

?>
Employee Department:<select name="mydept" selected="selected"><br/>
<?php

while($r=mysql_fetch_array($dept))
{
echo '<option value="',$r['name'],'">',$r['name'],'</option>';


}
?>
</select>

<input type="hidden" name="preeid" value="<?php echo $editid;?>" />
<br/><br/>
<input type="submit" value="Save"/>
</form>
 
</html>