<?php
include_once('../main.php');
?>
<html>
			<center>
			
							
					<?php
					$total_sal=0;
									$conn=mysql_connect('localhost','root','');
								      if(!$conn){
								         die('error connecting ');
								         }
							
								         mysql_select_db('anywer',$conn);
										       $sql="select * from employee";
								         $res=mysql_query($sql);
										 $abs=0;
								         while($r=mysql_fetch_array($res))
								         		{
								         				$x=$r[0];
								         				$y=$r[8];
								         				$z=$r[7];
								         				echo "<tr>";
														$sql1="SELECT COUNT(DISTINCT(date)) FROM attendance where emp_id='$x' AND MONTH( DATE ) = MONTH( CURRENT_DATE ) ";
														$res1=mysql_query($sql1);
														$ro=mysql_fetch_array($res1);
														$ta=$ro[0];
														$spd=$z/26;
														$ts=$spd*$ta;
														$abs=$ts+$abs;
														$total_sal+=$z;
														
					
								  }
								         

?>
 <table border="1" >
 <tr>
									 <th>Total Payable Salary  </th>
									  <th>Total Salary</th>
									</tr>   
									<tr>
									<td><?php echo $abs; ?></td>
									<td><?php echo $total_sal; ?></td>
									</tr>
									</table>
</center>
</html>