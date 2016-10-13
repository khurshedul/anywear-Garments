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
					
									$s=$_POST['dept'];
									
									$conn=mysql_connect('localhost','root','');
								      if(!$conn){
								         die('error connecting ');
								         }
							
								         mysql_select_db('anywear',$conn);
										       $sql="select * from employee where department='$s'";
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
														$sql1="SELECT COUNT(DISTINCT(date)) FROM attendance where emp_id='$x' AND MONTH( DATE ) = MONTH( CURRENT_DATE )";
														$sqlabs="SELECT COUNT(DISTINCT(date)) FROM attendance where  MONTH( DATE ) = MONTH( CURRENT_DATE )";
								        
								         $res1=mysql_query($sql1);
								         $rw=mysql_fetch_array($res1);
								         $ta=$rw[0];
										  $resabs=mysql_query($sqlabs);
								         $rabs=mysql_fetch_array($resabs);
								         $tabs=$rabs[0];
								         $spd=$z/26;
								         $ts=$spd*$ta;
								         $abs=$tabs-$ta;
								         echo "<td>$abs</td>";
										echo "<td>$ts</td>";
								         
								         echo "</tr>";
										

														
								  }
								         

?>
</center>
</html>