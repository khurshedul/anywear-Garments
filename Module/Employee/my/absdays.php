<?php
require_once('../main.php');
?>
<html>
		<center>
		
		
		

						<table border="1" >
							 <tr>
									 <th>ID</th>
									<th>NAME</th>
									<th>Phone No</th>
									<th>joining date</th>
									<th>Department</th>
									<th>Total Salary</th>
									<th>Payable Salary</th>
									
							</tr>
							<?php
							$conn=mysql_connect('localhost','root','');
								      if(!$conn){
								         die('error connecting ');
								         }
								         mysql_select_db('anywer',$conn);
								         $sql="select * from employee where id='$check'";
								         $res=mysql_query($sql);
								         while($r=mysql_fetch_array($res))
								         		{
								         				$x=$r[0];
								         				$y=$r[8];
								         				$z=$r[7];
								         				echo "<tr>";
														echo "<td>$r[0]</td>";
														echo "<td>$r[1]</td>";
														echo "<td>$r[5]</td>";
														echo "<td>$r[6]</td>";
														echo "<td>$r[8]</td>";
														echo "<td>$r[7]</td>";
	
								         		}
								         $sql1="SELECT COUNT(DISTINCT(date)) FROM attendance  where emp_id='$x' AND MONTH( DATE ) = MONTH( CURRENT_DATE )";
								         $res1=mysql_query($sql1);
								         $ro=mysql_fetch_array($res1);
								         $ta=$ro[0];
										 $sql2="SELECT COUNT(DISTINCT(date)) FROM attendance  where  MONTH( DATE ) = MONTH( CURRENT_DATE )";
										 $res2=mysql_query($sql2);
										 $row1=mysql_fetch_array($res2);
										 $td=$row1[0];
								         $spd=$z/26;
								         $ts=$spd*$ta;
								        
										 
										echo "<td>$ts</td>";
								         echo "</tr>";
										 
							
							?>
						</table>
<table border="1" >

 <tr>
									 <th>you are absent in this days</th>
									
									
							</tr>
<?php

           
						 $i=0;
						$sql4="SELECT DISTINCT(date) FROM attendance where emp_id='$x' AND MONTH( DATE ) = MONTH( CURRENT_DATE )";
						$res4=mysql_query($sql4);
						while($row4=mysql_fetch_array($res4))
						{
						
						$arr[$i]=$row4[0];
						$i++;
						
						}
						echo "<hr />";
						$sql3="SELECT DISTINCT(date) FROM attendance where  MONTH( DATE ) = MONTH( CURRENT_DATE )";
						$res3=mysql_query($sql3);
						$j=0;
						while($row3=mysql_fetch_array($res3))
						{
						 if($row3[0]==@$arr[$j]){
						 $j++;
						 continue;
						 }
						 else 
						 echo "<tr><td>$row3[0]</td></tr>";
						}
						
?>


</table>	
						
				
						
		</center>
</html>