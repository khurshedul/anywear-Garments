<?php
include_once('../main.php');
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
									<th>Total Absent </th>
									<th>Payable Salary</th>
									
							</tr>
							<?php
							$conn=mysql_connect('localhost','root','');
								      if(!$conn){
								         die('error connecting ');
								         }
								         mysql_select_db('anywear',$conn);
								         $sql="select * from employee where id='$check'";
								         $res=mysql_query($sql);
								         while($ro=mysql_fetch_array($res))
								         		{
								         				$x=$ro[0];
								         				$y=$ro[8];
								         				$z=$ro[7];
								         				echo "<tr>";
														echo "<td>$ro[0]</td>";
														echo "<td>$ro[1]</td>";
														echo "<td>$ro[5]</td>";
														echo "<td>$ro[6]</td>";
														echo "<td>$ro[8]</td>";
														echo "<td>$ro[7]</td>";

														
								         		}
								         $sql1="SELECT COUNT(DISTINCT(date)) FROM attendance where emp_id='$x' AND MONTH( DATE ) = MONTH( CURRENT_DATE )";
								         $res1=mysql_query($sql1);
								         $r=mysql_fetch_array($res1);
								         $ta=$r[0];
										 $sql2="SELECT COUNT(DISTINCT(date)) FROM attendance where  MONTH( DATE ) = MONTH( CURRENT_DATE )";
										 $res2=mysql_query($sql2);
										 $row1=mysql_fetch_array($res2);
										 $td=$row1[0];
								         $spd=$z/26;
								         $ts=$spd*$ta;
								         $abs=$td-$ta;
								         echo "<td>$abs</td>";
										echo "<td>$ts</td>";
								         //echo $row[0];
								         echo "</tr>";
							
							?>
						</table>	
		</center>
</html>